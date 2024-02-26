<?php 
    $location = basename($_SERVER['REQUEST_URI']);
    // die(var_dump($location));
?>
<nav id="nav">
    <ul class="links">
        <li class="{{ ($location == "fashion") ? "active" : "" }}"><a href="{{ url('2024/fashion') }}">Fashion</a></li> 
        <li class="{{ ($location == "footwear") ? "active" : "" }}"><a href="{{ url('2024/footwear') }}">Footwear</a></li>
        <li class="{{ ($location == "art") ? "active" : "" }}"><a href="{{ url('2024/art') }}">Art</a></li>
        <li class="{{ ($location == "design") ? "active" : "" }}"><a href="{{ url('2024/design') }}">Design</a></li>
    </ul>
    <ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
    </ul>
</nav>