(function ($) {
    FieldValueCopier = {
        init: function () {
            this.initWidget();
        },
        initWidget: function () {
            $('.field-value-copier .load').each(function () {
                $(this).on('click', function (e) {
                    var $link = $(this);

                    e.preventDefault();

                    if ($link.hasClass('disabled'))
                    {
                        return;
                    }

                    if (confirm($link.data('confirm'))) {
                        window.location.href = $link.attr('href') + '&fieldValue=' + $link.siblings('select').val();
                    }
                });
            });
        }
    };

    $(document).ready(function () {
        FieldValueCopier.init();
    });

})(jQuery);

$(document).addEvent('domready', function() {
    var $select = $$('.field-value-copier select');

    if ($select.length <= 0)
        return;

    $select = $select[0];

    function checkSelect($select) {
        if ($select.selectedIndex <= 0)
        {
            $select.getAllNext('a.tl_submit').addClass('disabled');
        }
        else
        {
            $select.getAllNext('a.tl_submit').removeClass('disabled');
        }
    }

    if ($select != null)
    {
        checkSelect($select);

        $select.addEvent('change',function(event) {
            checkSelect(this);
        });
    }
});