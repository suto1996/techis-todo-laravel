@extends('layouts.app')
 
@section('content')
 
<!-- タスク登録用パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
 
    <!-- 新タスクフォーム -->
    <form action="{{ url('member') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
 
        <!-- タスク名 -->
        <div class="form-group">
            <label for="member-name" class="col-sm-3 control-label">Member</label>
 
            <div class="col-sm-6">
                <input type="text" name="name" id="member-name" class="form-control">
            </div>
        </div>
 
        <!-- タスク追加ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>
    </form>
</div>
 
<!-- タスク一覧表示 -->
@if (count($members) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current Members 
    </div>

    <a href="{{ url('touroku') }}">登録</a>
 
    <div class="panel-body">
        <table class="table table-striped member-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>Member</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                 @foreach ($members as $member)
                <tr>
                    <!-- タスク名 -->
                    <td class="table-text">
                        <div>{{ $member->name }}</div>
                    </td>
 
                    <td>
                        <!-- TODO: 削除ボタン -->
                        <form action="{{ url('member/'.$member->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
 
                            <button type="submit" id="delete-member-{{ $member->id }}" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>削除
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection