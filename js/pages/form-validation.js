'use strict';
$(document).ready(function() {
    $(function() {
        // [ Add phone validator ]
        $.validator.addMethod(
            'phone_format',
            function(value, element) {
                return this.optional(element) || /^\(\d{3}\)[ ]\d{3}\-\d{4}$/.test(value);
            },
            'Invalid phone number.'
        );

        // [ Initialize validation ]
        $('#validation-form123').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'email': {
                    required: true,
                    email: true
                },
                'validation-password': {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                'validation-password-confirmation': {
                    required: true,
                    minlength: 6,
                    equalTo: 'input[name="validation-password"]'
                },
                'password': {
                    minlength: 6,
                    maxlength: 20
                },
                'password-confirmation': {
                    minlength: 6,
                    equalTo: 'input[name="password"]'
                },
                'first_name': {
                    required: true
                },
                'name': {
                    required: true
                },
                'last_name': {
                    required: true,

                },
                'code': {
                    required: true,

                },
                'symbol': {
                    required: true,

                },
                'level': {
                    required: true,

                },
                'start': {
                    required: true,
                    number: true,



                },

                'end': {
                    required: true,
                    number: true,



                },
                'number': {
                    required: true,

                },
                'position': {
                    required: true,

                },
                'customer': {
                    required: true,

                },
                'trainer': {
                    required: true,

                },
                'from': {
                    required: true,

                },
                'to': {
                    required: true,

                },
                'duration': {
                    required: true,

                },
                'cost': {
                    required: true,

                },

                'validation-select': {
                    required: true
                },
                'validation-bs-tagsinput': {
                    required: true
                },
                'validation-text': {
                    required: true
                },
                'validation-file': {
                    required: true
                },
                'validation-switcher': {
                    required: true
                },
                'validation-radios': {
                    required: true
                },
                'validation-radios-custom': {
                    required: true
                },
                'validation-checkbox': {
                    required: true
                },
                'validation-checkbox-custom': {
                    required: true
                },
            },

            // Errors //

            errorPlacement: function errorPlacement(error, element) {
                var $parent = $(element).parents('.form-group');

                // Do not duplicate errors
                if ($parent.find('.jquery-validation-error').length) {
                    return;
                }

                $parent.append(
                    error.addClass('jquery-validation-error small form-text invalid-feedback')
                );
            },
            highlight: function(element) {
                var $el = $(element);
                var $parent = $el.parents('.form-group');

                $el.addClass('is-invalid');

                // Select2 and Tagsinput
                if ($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') === 'tagsinput') {
                    $el.parent().addClass('is-invalid');
                }
            },
            unhighlight: function(element) {
                $(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
            }
        });
    });
});
