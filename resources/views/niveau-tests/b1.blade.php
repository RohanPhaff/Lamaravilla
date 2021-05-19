@extends('common.master')

@section('content')
<div class="spacer"></div>
<div class="all-questions">
    <form method="POST" action="/b1">
        @csrf

        <?php $vraag = 0 ?>
        @foreach($b1 as $b1s)

        <div class="question-border">
            <h1 class="question">{{ $b1s->question }}</h1>
            <?php if ($b1s->secondpart ==! null): ?> 
                    <h1 class="question">{{ $b1s->secondpart }}</h1>
            <?php endif; ?>
            <?php if ($b1s->thirdpart ==! null): ?> 
                    <h1 class="question">{{ $b1s->thirdpart }}</h1>
            <?php endif; ?>
            <?php if ($b1s->fourthpart ==! null): ?> 
                    <h1 class="question">{{ $b1s->fourthpart }}</h1>
            <?php endif; ?>
            <label class="container">
                <input type="checkbox" name="question{{ $b1s->id }}" value="a" onclick="return ValidateAnswerSelection{{ $b1s->id }}();">{{ $b1s->a }}<br>
                <span class="checkmark"></span>
            </label>
            <label class="container">
                <input type="checkbox" name="question{{ $b1s->id }}" value="b" onclick="return ValidateAnswerSelection{{ $b1s->id }}();">{{ $b1s->b }}<br>
                <span class="checkmark"></span>
            </label>
            <label class="container">
                <input type="checkbox" name="question{{ $b1s->id }}" value="c" onclick="return ValidateAnswerSelection{{ $b1s->id }}();">{{ $b1s->c }}<br>
                <span class="checkmark"></span>
            </label>
                <br>
        </div>

        <script type="text/javascript">
            var a = 0;
            var b = 0;
            var c = 0;

            function ValidateAnswerSelection{{ $b1s->id }}()
            {
                var checkboxes = document.getElementsByName("question{{ $b1s->id }}");
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