<!--
    HTML comment
-->
<?php
//one punch

/*
    sok
    sor
    alma
    hell
*/
?>

{{-- Laravel komment --}}

<?php

echo 1 + 1;
?>

{{ 1 + 1}}

<?php
if( a > 0) {
    echo "nagyobb";
}elseif( a < 0) {
    echo "kissebb";
}else {
    echo "nulla";
}
?>

@if( a > 0)
    nagyobb
@elseif( a < 0)
    kissebb
@else
    nulla
@endif


<?php
for( $i = 0; $i <10; $i++) {
   echo $i;
}
?>

@for($i = 0; $i < 10; $i++)
    $i
@endfor

@foreach( lista: elemek )
    valamit csinalok
@endforeach