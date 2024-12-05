@extends('layout')

@section('content')
    <table>
        <tr>
            <th>path</th>
            <th>file count</th>
        </tr>
        @foreach($directories as $file)
            <tr>
                <td style="background-color: #e5e7eb;"><a
                        href="{{route('list', ['path' => $file['dir']])}}">{{$file['dir']}}</a></td>
                <td style="text-align: right;">{{$file['count']}}</td>
            </tr>
        @endforeach
        @foreach($files as $filename)
            <tr>
                <td>
                    <a href="{{\Illuminate\Support\Facades\Storage::temporaryUrl($filename,now()->addMinutes(5))}}" target="_blank">{{$filename}}</a>
                </td>
                <td></td>
            </tr>
        @endforeach
        {{--<tr>
            <td>FILE</td>
            <td style="text-align: right;">{{count($files)}}</td>
        </tr>--}}
    </table>


@endsection
