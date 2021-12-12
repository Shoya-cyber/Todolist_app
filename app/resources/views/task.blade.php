<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>MyTasks</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  <div id="wrap" class="wrap">

    <div class="task">
      <!-- タスク作成エリア -->
      <div class="task__new">
        <h2>新しいタスクを作成</h2>
        @include('layouts.regists')
      </div>

      <!-- タスク一覧表示エリア -->
      <div class="task__area">
        <h2>わたしのタスク一覧</h2>
        <ul class="task__area-list">
          @include('layouts.myTasks')
        </ul>
      </div>
    </div>

  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
  <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>