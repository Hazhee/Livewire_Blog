@props(['user'])

    <img class="w-7 h-7 rounded-full mr-3"
        src="{{$user->profile_photo_url}}"
        alt="{{$user->name}}">
    <span class="mr-1 text-xs">{{$user->name}}</span>
