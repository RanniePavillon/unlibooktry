<style>
    .link-selected{
        color:maroon;
    }
	#lowerLink2{
		padding-left: 191px;
	}

</style>

<!-- </?php
    $subLink = '';
    if(Session::getSession('UB_SUBDOMAINS'))
    {
        $subLink = Session::getSession('UB_SUBDOMAINS').'/';
    }
?>  -->
@include('layouts.header')
<nav id="lowerlink2">
    
		 <li><a href="{{('/inventory/on_hand')}}"class="submit4">ON HAND</a>
            <div><img class="img2"  style="margin-left:47px;" src="{{asset('images/tri2a.png')}}"></div>
        </li>
		<li><a href="{{('inventory/counting')}}"class="submit4">COUNTING</a>
            <div><img class="img2"  style="margin-left:47px;" src="{{asset('images/tri2a.png')}}"></div>
        </li>
        <li><a href="{{('inventory/transfer')}}"class="submit4">TRANSFER</a>
            <div><img class="img2"  style="margin-left:47px;" src="{{asset('images/tri2a.png')}}"></div>
        </li>
		<li><a href="{{('inventory/location')}}"class="submit4">WAREHOUSE</a>
            <div><img class="img2"  style="margin-left:47px;" src="{{asset('images/tri2a.png')}}"></div>
        </li>
		<li><a href="{{('inventory/productCategory')}}"class="submit4">PRODUCT CATEGORY</a>
            <div><img class="img2"  style="margin-left:47px;" src="{{asset('images/tri2a.png')}}"></div>
        </li>
		<li><a href="{{('inventory/area')}}"class="submit4">AREA</a>
            <div><img class="img2"  style="margin-left:29px;" src="{{asset('images/tri2a.png')}}"></div>
        </li>
		<li class="hidden"><a href="{{('inventory/branch')}}"class="submit4">BRANCH</a>
            <div><img class="img2"  style="margin-left:38px;" src="{{asset('images/tri2a.png')}}"></div>
        </li>
		
</nav>
<div class="hrlink"></div>
<div class="clear"></div>

