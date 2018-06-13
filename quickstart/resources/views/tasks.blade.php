@extends('app')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('home.new_task')}}
                </div>
                <div class="panel-body">                   
                    <!-- New Task Form -->
                    {!! Form::open(['url' => 'tasks', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <!-- Task Name -->
                        <div class="form-group">
                            {!! Form::label('email', trans('home.task'), ['class' => 'col-sm-3 control-label']) !!}  
                            <div class="col-sm-6">
                                {{ Form::text('name', '', array_merge(['class' => 'form-control'])) }}
                            </div>
                        </div>
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                {!! Form::submit(trans('home.add'), ['class' => 'btn btn-default']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('home.current_tasks')}}
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>
                                    {{ trans('home.task')}}
                                </th>                          
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text">{{ $task->name }}</td>
                                            <!--zzzz Task Delete Button -->
                                        <td>
                                            {!! Form::open(['url' => "tasks/" . $task->id , 'method' => 'DELETE']) !!}
                                                {!! Form::token(); !!}
                                                {!! Form::submit(trans('home.delete'), ['class' => 'btn btn-danger']) !!}  
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>                       
                        </table>
                    </div>
                </div>  
            @endif                  
        </div>
    </div>
@endsection
