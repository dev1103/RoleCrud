<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>

</head>

<body>
    <div class="container pt-3">
        <form action="{{ url('register') }}" method="POST" autocomplete="off" id="regForm"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="text-center font-weight-bold"> Registration </h4>
                        </div>

                        <div class="card-body pl-4 pr-4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="firstname"> First Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="firstname" id="firstname" class="form-control"
                                            placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="lastname"> Last Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="lastname" id="lastname" class="form-control"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="email"> Email <span class="text-danger">*</span> </label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="contact_number"> Contact Number <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="contact_number" id="contact_number"
                                            class="form-control" placeholder="Contact Number">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="state"> State <span class="text-danger">*</span> </label>
                                        <select class="form-control state" name="state" id="state">
                                            <option selected value="" disabled>Select State</option>
                                            @foreach ($state as $data)
                                                <option value="{{ $data->id }}">
                                                    {{ $data->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="city"> City <span class="text-danger">*</span> </label>
                                        <select id="city" name="city" class="form-control">
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="postcode"> Postcode <span class="text-danger">*</span> </label>
                                        <input type="text" name="postcode" id="postcode" class="form-control"
                                            placeholder="Postcode">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="role"> Role <span class="text-danger">*</span> </label>
                                        <select class="form-control" name="role" id="role">
                                            <option selected value="" disabled>Select Role</option>
                                            @foreach ($role as $data)
                                                <option value="{{ $data->id }}">
                                                    {{ $data->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="password"> Password <span class="text-danger">*</span> </label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="confirmPassword"> Confirm Password <span
                                                class="text-danger">*</span> </label>
                                        <input type="password" name="confirmPassword" id="confirmPassword"
                                            class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label> Hobbies <span class="text-danger">*</span> : </label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="hobbies[]" class="form-check-input"
                                                    value="Reading">Reading
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="hobbies[]" class="form-check-input"
                                                    value="Writing">Writing
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="hobbies[]" class="form-check-input"
                                                    value="Driving">Driving
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="hobbies[]" class="form-check-input" value="Music">Music
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="hobbies[]" class="form-check-input" value="Dance">Dance
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label> Gender <span class="text-danger">*</span> : </label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="gender" value="male">Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="gender" value=""female>Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="files" class="form-label">Select Multiple files</label>
                                        <input class="form-control" type="file" name="files[]" id="files" multiple>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 offset-lg-6 text-right">
                                    <button type="submit" class="btn btn-success"> Create your account </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    <script>
        $(document).on('change', 'select.state', function() {
            var idState = this.value;
            $("#city").html('');
            $.ajax({
                url: "{{ url('fetch-cities') }}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#city').html('<option value="" disabled>-- Select City --</option>');
                    $.each(res.cities, function(key, value) {
                        $("#city").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z\s0-9]+$/i.test(value);
        }, "Only alphabetical characters and number");
        $("#regForm").validate({
            rules: {
                firstname: {
                    required: true,
                    lettersonly: true
                },
                lastname: {
                    required: true,
                    lettersonly: true
                },
                email: {
                    required: true,
                    email: true,
                },
                contact_number: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                password: {
                    required: true,
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#password"
                },
                gender: {
                    required: true,
                },
                city: {
                    required: true,
                },
                state: {
                    required: true,
                },
                postcode: {
                    required: true,
                    minlength: 6,
                    maxlength: 6
                }
            },
            messages: {
                firstname: {
                    required: "First name is required",
                },
                lastname: {
                    required: "Last name is required",
                },
                email: {
                    required: "Email is required",
                    email: "Email must be a valid email address",
                },
                contact_number: {
                    required: "Contact number is required",
                    minlength: "Contact number must be of 10 digits"
                },
                password: {
                    required: "Password is required",
                },
                confirmPassword: {
                    required: "Confirm password is required",
                    equalTo: "Password and confirm password should same"
                },
                gender: {
                    required: "Please select the gender",
                },
                city: {
                    required: "City is required",
                },
                state: {
                    required: "State is required",
                },
                postcode: {
                    required: "Postcode is required",
                    minlength: "Postcode must be of 6 digits",
                    maxlength: "Postcode cannot be more than 6 digits"
                }
            }
        });
    </script>
</body>

</html>
