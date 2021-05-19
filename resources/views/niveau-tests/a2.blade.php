@extends('common.master')

@section('content')
<div class="spacer"></div>
<div class="all-questions">
    <form method="POST" action="/a2">
        @csrf

        @foreach($a2 as $a2s)

        <div class="question-border">
            <h1 class="question">{{ $a2s->question }}</h1>
            <?php if ($a2s->secondpart ==! null): ?> 
                    <h1 class="question">{{ $a2s->secondpart }}</h1>
            <?php endif; ?>
            <label class="container">
                <input type="checkbox" name="question{{ $a2s->id }}" value="a" onclick="return ValidateAnswerSelection{{ $a2s->id }}();">{{ $a2s->a }}<br>
                <span class="checkmark"></span>
            </label>
            <label class="container">
                <input type="checkbox" name="question{{ $a2s->id }}" value="b" onclick="return ValidateAnswerSelection{{ $a2s->id }}();">{{ $a2s->b }}<br>
                <span class="checkmark"></span>
            </label>
            <label class="container">
                <input type="checkbox" name="question{{ $a2s->id }}" value="c" onclick="return ValidateAnswerSelection{{ $a2s->id }}();">{{ $a2s->c }}<br>
                <span class="checkmark"></span>
            </label>
                <br>
        </div>

        <script type="text/javascript">
            var a = 0;
            var b = 0;
            var c = 0;

            function ValidateAnswerSelection{{ $a2s->id }}()
            {
                var checkboxes = document.getElementsByName("question{{ $a2s->id }}");
                var numberOfCheckedItems = 0;

                if(a === 1 )
                {
                    checkboxes[0].checked = false;
                    a -= 1
                }
                if(b === 1)                    {
                    checkboxes[1].checked = false;
                    b -= 1
                }
                if(c === 1)
                {
                    checkboxes[2].checked = false;
                    c -= 1
                }

                for(var i = 0; i < checkboxes.length; i++)
                {
                    if(checkboxes[i].checked === true){
                        if(checkboxes[i].value === "a")
                        {
                            a += 1
                        }
                        if(checkboxes[i].value === "b")
                        {
                            b += 1
                        }
                        if(checkboxes[i].value === "c")
                        {
                            c += 1
                        }
                    }
                }
            }
        </script>
        @endforeach
        <input type="submit" value="Controleer" class="submit">
    </form>
</div>
@endsection