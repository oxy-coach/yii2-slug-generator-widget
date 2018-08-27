(function ($) {

    // name input change handler
    $.fn.ChangeNameHandler = function (action) {

        let nameInput = $('#slugGeneratorWidget input[data-field="name"]');
        let slugInput = $('#slugGeneratorWidget input[data-field="slug"]');

        nameInput.change(function () {

            if (slugInput.val() != '') return false;
            let value = nameInput.val();

            $.ajax({
                type:'post',
                url: action,
                data: {name:value},
                success:function (data) {
                    slugInput.val(data);
                }
            });

        });
    };

})(jQuery);