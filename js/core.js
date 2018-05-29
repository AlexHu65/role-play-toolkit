$(document).ready(function () {


    /**
     * There a jquery function to send a post variable to delete one item
     */
    $("#delete").click(function () {
        $.ajax({
            url: 'http://localhost:8080/role-play-toolkit/monsters/',
            type: 'POST',
            data: {'id': $('#delete').data('value') ,'action': 'delete'},
            success: function () {
                alert('Monster was delete');
                window.location.replace('http://localhost:8080/role-play-toolkit/monsters/');

            },
            dataType: 'text'

        });


    });

    /***
     * Show the form to create new item , monsters or heroes
     */

    $("#new-monster").click(function () {
        if ($("#monsters-panel").attr('data-value') == 0) {

            /**
             * Here is added the attributes for the monster form panel
             */

            $("#monsters-panel").css("display", "");
            $("#hero-panel").css("display", "none");


            $("#monsters-panel").attr("data-value", "1");
            $("#hero-panel").attr("data-value", "0");

        } else {


            $("#monsters-panel").css("display", "none");
            $("#monsters-panel").attr("data-value", "0");

        }


    });

    /**
     * Panel for new hero form
     */

    $("#new-hero").click(function () {

        /**
         * Here is added the attributes for the heroes form panel
         */
        if ($("#hero-panel").attr('data-value') == 0) {


            $("#hero-panel").css("display", "");
            $("#monsters-panel").css("display", "none");


            $("#hero-panel").attr("data-value", "1");
            $("#monsters-panel").attr("data-value", "0");


        } else {
            $("#hero-panel").css("display", "none");
            $("#hero-panel").attr("data-value", "0");

        }


    });

    /**
     * Here is the new item for a monster
     */

    $("#monster-form").submit(function () {

        $.ajax({
            url: 'http://localhost:8080/role-play-toolkit/newitem/',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'text'

        });


    });

    /**
     * Update the monster
     */

    $("#monster-form-update").submit(function () {

        $.ajax({
            url: 'http://localhost:8080/role-play-toolkit/monsters/getmonster/',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'text'

        });


    });


});


