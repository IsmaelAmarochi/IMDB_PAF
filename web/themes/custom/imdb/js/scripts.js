(function ($) {
    form = {
        form: null,
        formItem: null,
        inputField: null,
        textarea: null,
        init: function (formSelector) {
            this.form = $(formSelector);
            var self = this;

            this.onInput();
            this.onBlur();

            $(document).ajaxComplete(function (event, request, settings) {
                self.form = $(formSelector);
                self.onInput();
                self.onBlur();
            });

        },
        onInput: function () {
            this.formItem = this.form.find('.form-item');
            this.inputField = this.formItem.find('input');
            this.textarea = this.formItem.find('textarea');

            this.form.find('input').on('input', function () {
                $(this).parent().addClass('is-active');
            });

            this.form.find('textarea').on('input', function () {
                $(this).parents('.form-item').addClass('is-active');
            });

            this.form.find('input').each(function () {

                if ($(this).val()) {
                    $(this).siblings('label').css('transition', 'none');
                    $(this).parent().addClass('is-active');
                }
            });

            this.form.find('textarea').each(function () {
                if ($(this).val()) {
                    $(this).parents('.form-item').children('label').css('transition', 'none');
                    $(this).parents('.form-item').addClass('is-active');

                }
            });
        },
        onFocus: function () {
            this.formItem = this.form.find('.form-item');
            this.inputField = this.formItem.find('input');
            this.textarea = this.formItem.find('textarea');

            this.form.find('input').on('focus', function () {
                $(this).parent().addClass('active');
            });

            this.form.find('textarea').on('focus', function () {
                $(this).parents('.form-item').addClass('active');
            });

            this.form.find('input').each(function () {
                if ($(this).val()) {
                    $(this).siblings('label').css('transition', 'none');
                    $(this).parent().addClass('active');
                }
            });

            this.form.find('textarea').each(function () {
                if ($(this).val()) {
                    $(this).parents('.form-item').children('label').css('transition', 'none');
                    $(this).parents('.form-item').addClass('active');

                }
            });
        },
        onBlur: function () {
            this.formItem = this.form.find('.form-item');
            this.inputField = this.formItem.find('input');
            this.textarea = this.formItem.find('textarea');

            this.form.find('input').on('blur', function () {
                if (!$(this).val()) {
                    $(this).parent().removeClass('active');
                }
            });

            this.form.find('textarea').on('blur', function () {
                if (!$(this).val()) {
                    $(this).parents('.form-item').removeClass('active');
                }
            });
        },
    };
})(jQuery);