<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        @if(config('admin.show_environment'))
            <strong>Env</strong>&nbsp;&nbsp; {!! env('APP_ENV') !!}
        @endif

        &nbsp;&nbsp;&nbsp;&nbsp;

        <strong>Version</strong>&nbsp;&nbsp; {!! env('APP_VERSION') !!}

    </div>
    <!-- Default to the left -->
    <strong>Powered by <a href="http://sistem65.com/">{!! env('APP_NAME') !!}</a></strong>
</footer>
