
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

<ul class="menu-lists">
   @foreach ($menuData as $item)
       
        @if($item->status == 'actif')
                <li class="menu-list">
                                        <div class="menu-list-top">
                                            @if($item->is_page == 'yes')
                                            <a href="{{route('page.route',['id'=>$item->id])}}" class="menu-link">{{ $item->name }}</a>  
                                            @else
                                            <a  class="menu-link">{{ $item->name }}</a>  
                                           
                                            @endif

                                            @if(!$item->sub->isEmpty() )
                                             <span><img src="{{ asset('/images/Vectors/angle-down.svg') }}" alt=""></span>
                                             
                                            @endif
                                            
                                        </div>
                                        <div class="menu-drop-down">
                                            @if(!$item->sub->isEmpty() )

                                            <ul class="menu-drop-down-lists">
                                                @foreach($item->sub as $k)
                                                 @if($k->status == 'actif')
                                                <li class="menu-drop-down-list">
                                                    <i class="fi fi-rr-arrow-small-right"></i>
                                                    @if($k->is_page == 'yes')
                                                     <a href="{{route('page.sub.route',['id'=>$k->id])}}" class="menu-drop-down-link">{{$k->name}}</a>
                                                    @else
                                                     <a  class="menu-drop-down-link">{{$k->name}}</a> 
                                                    @endif
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>

                                            @endif
                                        </div>
                 </li>
       @endif
    @endforeach

</ul>
