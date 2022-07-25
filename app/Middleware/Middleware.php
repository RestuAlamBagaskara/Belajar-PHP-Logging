<?php
    namespace Alambagaskara\BelajarPhpMvc\Middleware;

    interface Middleware {
        function before(): void;
    }