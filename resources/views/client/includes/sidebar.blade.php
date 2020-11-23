<ul class="list-group user-sidebar hidden-xs">
@if(Auth::user()->email=='')
  <li class="list-group-item"><a href="{{URL::to('personal-info')}}">Registration</a></li>
  @endif
  @if(Auth::user()->email!='')
  <li class="list-group-item"><a href="{{URL::to('form')}}">View Form</a></li>
  @endif
   <li class="list-group-item"><a href="{{URL::to('payment')}}">Make Payment</a></li>

  @if(\Auth::check())

        <?php
        $routine=\App\Model\Routine::where('user_id',Auth::user()->id)->whereYear('created_at',date('Y'))->first();
        ?>
            @if(empty($routine))
                <li class="list-group-item"><a href="{{URL::to('routine')}}">Make My Routine</a></li>
            @else
                <li class="list-group-item"><a href="{{URL::to('my-routine')}}">View My Routine</a></li>
            @endif
  @endif
  <li class="list-group-item"><a href="{{URL::to('coming-soon')}}">Practice Now <i class="fa fa-lock"></i></a></li>
  <li class="list-group-item"><a href="{{URL::to('coming-soon')}}">Feedback <i class="fa fa-lock"></i></a></li>
  <li class="list-group-item"><a href="{{URL::to('coming-soon')}}"> Dashboard <i class="fa fa-lock"></i> </a></li>
  <li class="list-group-item"><a href="{{URL::to('coming-soon')}}">Digital Coach  <i class="fa fa-lock"></i></a></li>
  <li class="list-group-item"><a href="{{URL::to('coming-soon')}}">Homework <i class="fa fa-lock"></i></a></li>
  <li class="list-group-item">
  <a href="{{ url('logout') }}" class="btn btn-default btn-flat">
      <i class="fa fa-sign-out fa-fw"></i> Logout
  </a>

  </li>
</ul>
