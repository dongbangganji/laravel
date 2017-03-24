@foreach ($tasks as $task)
    <p> 1 : {{ $task['name'] }}, 2 : {{ $task['due_date'] }}</p>
@endforeach
@for ($i =0; $i < count($tasks); $i++)
    <p> 1 : {{ $tasks[$i]['name'] }}, 2 : {{ $tasks[$i]['due_date'] }}</p>
@endfor