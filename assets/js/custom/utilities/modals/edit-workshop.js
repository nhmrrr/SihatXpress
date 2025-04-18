
"use strict";
var KTModalNewTargetEdit = function() {
    var t, e, n, a, o, i;
    return {
        init: function() {
            (i = document.querySelector("#kt_modal_edit_workshop")) && (o = new bootstrap.Modal(i), a = document.querySelector("#kt_modal_new_target_form_edit"), t = document.getElementById("kt_modal_new_target_submit_edit"), e = document.getElementById("kt_modal_new_target_cancel_edit"), new Tagify(a.querySelector('[name="tags"]'), {
                whitelist: ["Important", "Urgent", "High", "Medium", "Low"],
                maxTags: 5,
                dropdown: {
                    maxItems: 10,
                    enabled: 0,
                    closeOnSelect: !1
                }
            }).on("change", (function() {
                n.revalidateField("tags")
            })), $(a.querySelector('[name="due_date"]')).flatpickr({
                enableTime: !0,
                dateFormat: "d, M Y, H:i"
            }), $(a.querySelector('[name="team_assign"]')).on("change", (function() {
                n.revalidateField("team_assign")
            })), n = FormValidation.formValidation(a, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "Workshop name is required"
                            }
                        }
                    },
                    location: {
                        validators: {
                            notEmpty: {
                                message: "Workshop location is required"
                            }
                        }
                    },
                    workshop_no: {
                        validators: {
                            notEmpty: {
                                message: "Workshop No. is required"
                            }
                        }
                    },
                    contact_no: {
                        validators: {
                            notEmpty: {
                                message: "Contact No. required"
                            }
                        }
                    }
                    // ,
                    // "targets_notifications[]": {
                    //     validators: {
                    //         notEmpty: {
                    //             message: "Please select at least one communication method"
                    //         }
                    //     }
                    // }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function(e) {
                var workshopForm = $('#kt_modal_new_target_form_edit').serialize();
                e.preventDefault(), n && n.validate().then((function(e) {
                    console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1,
                        // doRegister(workshopForm);
                        $.ajax({
                            url: base_url + 'office/editWorkshop',
                            type: "POST",
                            data: workshopForm,
                            dataType: "json",
                            async: true,
                            success: function( response ) {
                                // console.log(response);
                                if (response.status == true) {
                                    Swal.fire({
                                        text: response.msg,
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then((function(t) {
                                        if (t.isConfirmed) {
                                            t.isConfirmed && o.hide()
                                            location.reload();
                                        }
                                    }))
                                } else {
                                    Swal.fire({
                                        text: response.msg,
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    })
                                }
                            }
                        });
                        // Swal.fire({
                        //     text: "Form has been successfully submitted!",
                        //     icon: "success",
                        //     buttonsStyling: !1,
                        //     confirmButtonText: "Ok, got it!",
                        //     customClass: {
                        //         confirmButton: "btn btn-primary"
                        //     }
                        // }).then((function(t) {
                        //     t.isConfirmed && o.hide()
                        //     location.reload();
                        // }))
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })), e.addEventListener("click", (function(t) {
                t.preventDefault(), Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then((function(t) {
                    t.value ? (a.reset(), o.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTModalNewTargetEdit.init()
}));