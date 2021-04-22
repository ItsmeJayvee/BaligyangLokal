(()=>{
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.slider').slider({
            indicators: false
        });
        $('select').formSelect();
        $('.modal').modal();
    });
})();