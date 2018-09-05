@extends('lms.master.template')

@section('content')
<div class="about-container">
    <div class="about-title-container">
        <div class="about-title">About</div>
    </div>
    @foreach($generalsettings as $generalsetting)
 <div class="about-content">
    <div class="about-contentdesc">
    {{ $generalsetting->about  }}
    </div>
    <div class="about-mission">Mission</div>
    <div class="about-missiondesc">{{ $generalsetting->mission  }}.</div>
    <div class="about-vision">Vision</div>
    <div class="about-visiondesc">{{ $generalsetting->vision  }}
                                    
 </div>
 @endforeach
 
 </div>
 </div>

 @endsection

 <style>

.menu-list2 a {
    color:#2e77d1 !important;
}
        
</style>