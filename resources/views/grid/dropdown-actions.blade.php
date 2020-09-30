<div class="box-tools pull-right">
        @foreach($default as $action)
            <div class='btn-group' style='margin-right: 5px'>{!! $action->render() !!}</div>
        @endforeach

        @if(!empty($custom))

            @if(!empty($default))
                <li class="divider"></li>
            @endif

            @foreach($custom as $action)
                    <div>{!! $action->render() !!}</div>
            @endforeach
        @endif
</div>
