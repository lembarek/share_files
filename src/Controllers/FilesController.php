<?php

 namespace Lembarek\ShareFiles\Controllers;

use View;
use Redirect;
use Illuminate\Http\Request;
use Lembarek\ShareFiles\Controllers\Controller;
use Lembarek\ShareFiles\Requests\AddFileRequest;
use Lembarek\ShareFiles\Repositories\FileRepositoryInterface;

class FilesController extends Controller
{

    /**
    * construct
    *
    * @return void
    */
    protected $fileRepo;


    public function __construct(FileRepositoryInterface $fileRepo)
    {
        $this->fileRepo = $fileRepo;
    }


    /**
     * show all files
     *
     * @return Response
     */
    public function index()
    {
         return View::make('shareFiles::index');
    }


    /**
     * search
     *
     * @return Response
     */
    public function search(Request $request)
    {
        $q = $request->get('q');
        $files  = $this->fileRepo->search($q);
        return view::make('shareFiles::index', compact('files'));
    }


    /**
     * show the form to add a files
     *
     * @return Response
     */
    public function add()
    {
        return view('shareFiles::add');
    }


    /**
     * a save the file in DB
     *
     * @return void
     */
    public function postAdd(AddFileRequest $request)
    {
        $inputs = $request->except('_token');

        $inputs['slug'] = str_slug($inputs['name'], '_');

        $this->fileRepo->create($inputs);

        $request->file('file')->move('upload', $request->file('file')->getClientOriginalName());

        return Redirect::back()->with(['flash.message' => trans('file.add_success')]);

    }


    /**
     * show detail about a file
     *
     * @param  string  $slug
     * @return Response
     */
    public function show($slug)
    {
        $file = $this->fileRepo->getFileBySlug($slug);
        return view('shareFiles::show', compact('file'));
    }
}
