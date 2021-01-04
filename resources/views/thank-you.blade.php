@extends('layouts.index')

@section('title', 'Thank You')

@section('banner-slider')   
<div class="image-spacer-banner">
    <img src="../img/new-about-banner.jpg" alt="About AQUA Properties">
</div>
@stop

@section('content')
    <section class="bg-white ">
        <div class="container text-center">

            <h1 class="text-aqua-blue font-weight-normal"><?php echo isset( $_GET['name'] ) ? $_GET['name']. ',' : ' ' ?> Thank You</h1>
            <h3>
                 for registering your interest<br>
                <?php echo isset( $_GET['subject'] ) ? 'in '.$_GET['subject'] : ' ' ?>
            ​</h3>
            <hr >
            <h3>One of our Specialist will contact you shortly.</h3>

            <h4>You will be redirected to the previous page...</h4>
        </div>
    </section>
    <script type="text/javascript">
        setInterval(function() {
            parent.history.back();
        }, 5000);

</script>
@stop