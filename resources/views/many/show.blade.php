@extends('layouts.app')

@section('content')
    <ul>
        @foreach($teachersList as $teacher)
            <li>{{ $teacher->name }} ({{ $teacher->students->count() }})</li>
            @if(! $teacher->students->isEmpty() )
                <ol>
                    @foreach($teacher->students as $student)
                        <li>
                            {{ $student->name }}
                            @if($student->pivot->note)
                                <p class="text-muted">{{ $student->pivot->note }}</p>
                            @endif
                        </li>
                    @endforeach
                </ol>
            @endif
        @endforeach
    </ul>
@endsection