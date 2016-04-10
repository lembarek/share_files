@if(isset($files))
<table>
    @foreach($files as $file)
        <tr>
            <td><a href="{{ route('file::show', $file['slug']) }}">{{ $file['name'] }}</a></td>
        </tr>
    @endforeach
</table>
@endif

