<?php
session_cache_limiter('private');
$cache_limit = session_cache_limiter();
session_cache_expire(30);
$cache_expire = session_cache_expire();
session_start();
?>
