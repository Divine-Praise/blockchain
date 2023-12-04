/**
 * Copied from Github
 * jQuery Extensions
 * @param {object} $
 * @returns {mixed}

 */

(function ($) {
    var GEXT = {
        clearForm: function () {
            return this.each(function () {
                var type = this.type;
                var tag = this.tagName.toLowerCase();
                if (tag === 'form') {
                    return $(':input', this)
                        .clearForm();
                }
                if (type === 'text' || type === 'password' || tag === 'textarea') {
                    this.value = '';
                } else if (type === 'checkbox' || type === 'radio') {
                    this.checked = false;
                } else if (tag === 'select') {
                    this.selectedIndex = -1;
                }
            });
        },
        getPath: function () {
            var paths = [];

            this.each(function (index, element) {
                var path;
                var $node = $(element);

                while ($node.length) {
                    var realNode = $node.get(0);
                    var name = realNode.localName;
                    if (!name) {
                        break;
                    }

                    name = name.toLowerCase();
                    var parent = $node.parent();
                    var sameTagSiblings = parent.children(name);

                    if (sameTagSiblings.length > 1) {
                        var allSiblings = parent.children();
                        var i = allSiblings.index(realNode) + 1;
                        if (i > 0) {
                            name += ':nth-child(' + i + ')';
                        }
                    }

                    path = name + (path ? ' > ' + path : '');
                    $node = parent;
                }

                paths.push(path);
            });

            return paths.join(',');
        },
        scrollSpyX: function (a, b, c) {
            var jQuery = $;
            var f;
            var s = $(this);
            if (arguments.length === 0) {
                s.scrollSpy();
            }
            if (arguments.length === 1 && (typeof a === 'string' || a instanceof jQuery)) {
                s = a = typeof a === 'string' ? $(a) : a;
                $.scrollSpy(a);
            } else if (arguments.length === 1 && typeof a === 'function') {
                f = a;
                s.scrollSpy();
            } else if (arguments.length === 2 && (typeof a === 'string' || a instanceof jQuery) && typeof b === 'object') {
                s = a = typeof a === 'string' ? $(a) : a;
                $.scrollSpy(a, b);
            } else if (arguments.length === 2 && (typeof a === 'string' || a instanceof jQuery) && typeof b === 'function') {
                f = b;
                s = a = typeof a === 'string' ? $(a) : a;
                $.scrollSpy(a);
            } else if (arguments.length === 2 && typeof a === 'object' && typeof b === 'function') {
                f = b;
                s.scrollSpy(a);
            } else if (arguments.length === 3 && (typeof a === 'string' || a instanceof jQuery) && typeof b === 'object' && typeof c === 'function') {
                f = c;
                s = a = typeof a === 'string' ? $(a) : a;
                $.scrollSpy(a, b);
            } else {
                console.error('Invalid argument set');
            }

            window.ScrollSpyX = {};
            var visible = [];
            if (typeof f !== 'undefined') {
                s.on('scrollSpy:enter', function () {
                    visible = $.grep(visible, function (value) {
                        return value.is(':visible');
                    });
                    visible = visible.sort(function (a, b) {
                        return b.offset().top - a.offset().top;
                    });

                    var $this = $(this);
                    if (visible[0]) {
                        if ($this.data('scrollSpy:id') < visible[0].data('scrollSpy:id')) {
                            visible.unshift($(this));
                        } else {
                            visible.push($(this));
                        }
                    } else {
                        visible.push($(this));
                    }

                    window.ScrollSpyX.visible = visible;
                    f(visible[0], 'enter');
                });
                s.on('scrollSpy:exit', function () {
                    visible = $.grep(visible, function (value) {
                        return value.is(':visible');
                    });
                    visible = visible.sort(function (a, b) {
                        return b.offset().top - a.offset().top;
                    });

                    if (visible[0]) {
                        var $this = $(this);
                        visible = $.grep(visible, function (value) {
                            return value.attr('id') !== $this.attr('id');
                        });
                        visible = visible.sort(function (a, b) {
                            return b.offset().top - a.offset().top;
                        });
                        if (visible[0]) { // Check if empty
                            f(visible[0], 'exit');
                        }
                    }
                });
            }
        }
    };

    var BEXT = {
        isNumber: function (n) {
            return !isNaN(n);
        },
        isInt: function (n) {
            return $.isNumber(n) && n % 1 === 0;
        },
        isFloat: function (n) {
            return $.isNumber(n) && n % 1 !== 0;
        },
        isOdd: function (n) {
            return n % 2 !== 0;
        },
        isEven: function (n) {
            return n % 2 === 0;
        },
        isInArray: function (value, array) {
            return (array.indexOf(value) > -1);
        },
        isJsonString: function (str) {
            try {
                $.parseJSON(str);
                return true;
            } catch (e) {
                return false;
            }
        },
        safeParseJSON: function (str) {
            var $object;
            if (typeof str === 'string') {
                try {
                    $object = $.parseJSON(str);
                    return $object;
                } catch (e) {
                    return null;
                }
            } else if (typeof str === 'object') {
                return str;
            }
        },
        jsonDecode: function (jsonString) {
            return $.safeParseJSON(jsonString);
        },
        isInPageAnchor: function (baseUrl, link) {
            return (new RegExp(baseUrl)).test(link) && (new RegExp('#')).test(link);
        },

        getAnchor: function (link) {
            var urlParts = link.toString().split('#');
            return urlParts[1];
        },
        getUrlBase: function (link) {
            link = link.split('?')[0];
            var a = link.split('/');
            a = a.splice(0, a.length - 1);
            return a.join('/');
        },
        scrollTo: function (name, semaphore, duration) {
            var $this = this;
            $this.scroll = function (animateOptions) {
                if (target.length) {
                    var defaults = {
                        duration: duration,
                        queue: true,
                        easing: 'easeOutCubic'
                    };
                    if (typeof animateOptions === 'object') {
                        defaults = $.extend({}, defaults, animateOptions);
                    }

                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, defaults);
                }
            };

            var target = $('#' + name);
            target = target.length ? target : $('[name=' + name + ']');
            duration = typeof duration === 'undefined' ? 400 : duration;
            if (semaphore instanceof Semaphore) {
                semaphore.lock('func.scrollTo');
                $this.scroll({
                    complete: function () {
                        window.location.href = '#' + name;
                        semaphore.unlock('func.scrollTo');
                    }
                });
            } else {
                $this.scroll();
            }
        },
        range: function (min, max) {
            if (arguments.length === 1) {
                max = min;
                min = 0;
            }

            var a = [];
            for (var i = min; i < max + 1; i++) {
                a.push(i);
            }
            return a;
        },
        getKeys: function (obj) {
            var keys = [];
            for (var key in obj) {
                keys.push(key);
            }
            return keys;
        },
        uniqueArray: function (a) {
            var seen = {};
            var out = [];
            var len = a.length;
            var j = 0;
            for (var i = 0; i < len; i++) {
                var item = a[i];
                if (seen[item] !== 1) {
                    seen[item] = 1;
                    out[j++] = item;
                }
            }
            return out;
        }
    };

    var FNEXT = {
        /**
         * Input field autofill
         * @param {function} callable Expects parameters id, text, img, extra<br/>
         * id: ID of clicked item.<br/>
         * text: Display text of clicked item<br/>
         * img: Display image of clicked item<br/>
         * extra: An object containing extra data passed<br/>
         *
         * @param {string} scope Scope to search
         * @param {boolean} allowEnterKey Allow enter key to submit
         * @returns {object}
         */
        autoComplete: function (callable, scope, allowEnterKey) {
            window.is_timer = undefined;
            if (typeof allowEnterKey === 'undefined') {
                allowEnterKey = false;
            }
            if ($(this).is('input')) {
                //  No browser autocomplete, we have it covered
                $(this).attr('autocomplete', 'off');

                if (!allowEnterKey) { //Prevent enter key submit
                    $(this).bind('keypress keydown keyup', function (e) {
                        if (e.keyCode === 13) {
                            e.preventDefault();
                            return false;
                        }
                    });
                }

                //  Check key pressed
                $(this).on('keyup', function (e) {
                    if (e.keyCode === 13 || e.keyCode === 27) {
                        //  Enter or esc key pressed
                        var select = $('div#is-poplist');
                        if (select.length) {
                            select.hide();
                        }
                        return false;
                    } else {
                        if (!isNaN(window.is_timer)) {
                            clearTimeout(window.is_timer);
                        }
                        var input = $(this).val();
                        if (input !== '') {
                            //  Save input element scope
                            var element = this;
                            window.is_timer = setTimeout(function () {
                                var url = window.homepage + '/autocomplete';

                                iAjax({
                                    url: url,
                                    data: {'terms': input, 'scope': scope},
                                    onSuccess: function (data) {
                                        var select = $('div#is-poplist');
                                        //  Create popup if not exist
                                        if (!select.length) {
                                            select = $('body').append('<div id="is-poplist"></div>').find('div#is-poplist');
                                        }
                                        //  Position popup
                                        var window_width = $(window).width();
                                        var pop_width = $(select).width();
                                        if (window_width > pop_width) {
                                            var left = $(element).offset().left;
                                            var area = left + pop_width;
                                            //Place at the begining of input element
                                            //If offscreen, allow default (right = 0)
                                            select.css('left', area < window_width ? left : 'inherit');
                                        }
                                        //Push below input element
                                        var top = $(element).offset().top + $(element).height();
                                        select.css('top', top);

                                        //  Populate
                                        var items = '';
                                        for (var key in data) {
                                            if (data.hasOwnProperty(key)) {
                                                items += '<span class="pop-item" extra="'
                                                    + JSON.stringify(data[key]['extra'])
                                                    + '" val="' + key + '">';
                                                if (typeof (data[key]['image']) === 'string'
                                                    && data[key]['image'] !== '') {
                                                    items += '<img src="' + data[key]['image'] + '"/>';
                                                }
                                                items += data[key]['text'];
                                                items += '</span>';
                                            }
                                        }
                                        select.html(items);
                                        $(select.children()).on('click', function () {
                                            if (typeof callable === 'function') {
                                                callable($(this).attr('val'), $(this).text(), $('img', this).attr('src'), JSON.parse($(this).attr('extra')));
                                            }
                                            select.hide();
                                        });

                                        $('body').on('click', function () {
                                            select.hide();
                                        });

                                        select.show();
                                    }
                                });
                            }, 500);
                        } else {
                            $('div#is-poplist').hide();
                        }
                    }
                });
            }
            return this;
        }
    };

    $.extend(BEXT);
    $.extend(GEXT);
    $.fn.extend(GEXT);
    $.fn.extend(FNEXT);
}(jQuery));


function notify(pane, response, style) {
    var handle = pane.prop('data-timer');
    if ($.isInt(handle)) {
        clearTimeout(handle);
    }

    //Remove *-text classes
    pane.removeClass(function (index, css) {
        return (css.match(/(^|\s)\w+-text/g) || []).join(' ');
    });
    if (typeof (response['message']) !== 'undefined') {
        var message = response['message'];
        if (message instanceof Array) {
            message = message.join('<br/>');
        }
        pane.html(message);
        pane.addClass((typeof (response['mode']) !== 'undefined') ?
            response.mode + '-text' :
            (response['status'] === true ? 'green-text' : 'red-text'));
    } else {
        pane.html(toString(response));
        pane.addClass((typeof style === 'undefined') ? 'orange-text' : style);
    }
    pane.show();
    pane.prop('data-timer', setTimeout(function () {
        pane.hide();
    }, 15000));
}

/**
 * Handle display of http errors and response
 * @param {type} xhr
 * @param {type} form
 * @param {type} notifyElement
 * @returns {undefined}
 */
function handleHttpErrors(xhr, form, notifyElement) {
    notifyElement = vd(notifyElement, '.notify');
    //Wrap in JQuery
    notifyElement = form ? $(notifyElement, form) : $(notifyElement);

    if (xhr.status === 422) {
        if (typeof (xhr.responseJSON) !== 'object') {
            notify(notifyElement, {'status': false, 'message': xhr.responseJSON});
        } else {
            handle422ErrorObject(form, xhr.responseJSON, notifyElement);
        }
    } else if (xhr.status >= 400 && xhr.status < 500) {
        notify(notifyElement, {'status': false, 'message': xhr.responseJSON});
    } else if (xhr.status >= 500 && xhr.status < 600) {
        notify(notifyElement, {'status': false, 'message': 'Something snapped, please try again shortly.'});
    } else if ('status' in xhr) {
        notify(notifyElement, xhr);
    } else {
        //Fallback
        notify(notifyElement, {'status': false, 'message': 'Request failed'});
    }

}

function handle422ErrorObject(form, response, element) {
    $(form).find('.invalid').removeClass('invalid');
    var textArr = [];
    for (var field in response['errors']) {
        if (field in response['errors']) {
            $(form).find('[name="' + field + '"]').addClass('invalid');
            var data = $(response['errors']).prop(field);
            if (!!data && data.constructor === Array) {
                textArr.push(data.join("<br/>"));
            } else {
                textArr.push(data);
            }
        }
    }
    var notification = {
        'message': textArr.join('<br/>'),
        'status': false
    };
    notify(element, notification);
}

/**
 * Value or default
 * @param {type} value
 * @param {type} defaultValue
 * @returns {unresolved}
 */
function vd(value, defaultValue) {
    return typeof (value) !== 'undefined' ? value : defaultValue;
}


function iAjax(settings) {
    var ajaxSettings = {
        dataType: 'json',
        cache: true,
        headers: {
            'Cache-Control': 'max-age=200',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    };
    var extraConfig = {
        retry: true,
        trials: 1,
        retryInterval: 5000,
        completeAfterRetry: true,
        trialCount: 0
    };
    extraConfig = $.extend(extraConfig, settings['extraConfig']);

    //Merge settings
    Object.keys(settings).forEach(function (key) {
        if (key !== 'onSuccess'
            && key !== 'onFailure'
            && key !== 'onComplete'
            && key !== 'extraConfig') {
            var s = [];
            s[key] = settings[key];
            ajaxSettings = $.extend(ajaxSettings, s);
        }
    });

    var r = $.ajax(ajaxSettings);
    if (typeof (settings['onSuccess']) === 'function') {
        r.done(settings['onSuccess']);
    }
    if (typeof (settings['onComplete']) === 'function') {
        (function (completeAfterRetry) {
            r.always(function (jqXHR, status, statusText) {
                if (jqXHR['readyState'] !== 0 || !completeAfterRetry) {
                    settings['onComplete'](jqXHR, status, statusText);
                }
            });
        }(extraConfig.completeAfterRetry));
    }
    r.fail(function (response, status, statusText) {
        if (response['status'] === 401) {
            login(settings);
        } else {
            if (response['readyState'] == 0) {
                if (extraConfig['retry']) {
                    extraConfig['trialCount']++;
                    if (extraConfig['trialCount'] === extraConfig['trials']) {
                        extraConfig['retry'] = false;
                        extraConfig['completeAfterRetry'] = false;
                    }
                    //Repeat request
                    setTimeout(function () {
                        iAjax($.extend(settings, {extraConfig: extraConfig}));
                    }, extraConfig['retryInterval']);
                    return;
                } else {
                    toast('Connection error', 4000);
                }
            }

            if (typeof (settings['onFailure']) === 'function') {
                settings['onFailure'](response, status, statusText);
            }
        }

    });
    return r;
}

var lastToast;
var toastTimer;

function toast(message) {
    if (typeof (lastToast) !== 'undefined') {
        clearTimeout(toastTimer);
        lastToast.remove();
    }

    var lastToast = $('<div>')
        .addClass('black white-text animated slideInUp text-center')
        .css({
            padding: '10px',
            position: 'fixed',
            top: '100px',
            right: '50px'
        })
        .html(message);
    $('main').append(lastToast);

    toastTimer = setTimeout(function () {
        lastToast.remove();
        lastToast = undefined;
    }, 4000);
}

/**
 * Copied from http://stackoverflow.com/a/33928558/2836233
 *
 * Copies a string to the clipboard. Must be called from within an
 * event handler such as click. May return false if it failed, but
 * this is not always possible. Browser support for Chrome 43+,
 * Firefox 42+, Safari 10+, Edge and IE 10+.
 * IE: The clipboard feature may be disabled by an administrator. By
 * default a prompt is shown the first time the clipboard is
 * used (per session).
 * @param {type} text
 * @returns {undefined|Boolean}
 */

function copyToClipboard(text) {
    if (window.clipboardData && window.clipboardData.setData) {
        // IE specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text);

    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
        }
    }
}

/**
 * Number.prototype.format(n, x, s, c)
 *
 * @param {integer} n : number
 * @param {integer} lend : length of decimal
 * @param {integer} lenw : length of whole part
 * @param {mixed}   sd : sections delimiter
 * @param {mixed}   dd : decimal delimiter
 * @returns {formatMoney.num|Number}
 */
function formatMoney(n, lend, lenw, sd, dd) {
    var re = '\\d(?=(\\d{' + (lenw || 3) + '})+' + (lend > 0 ? '\\D' : '$') + ')',
        num = (new Number(n)).toFixed(Math.max(0, ~~lend));

    return (dd ? num.replace('.', dd) : num).replace(new RegExp(re, 'g'), '$&' + (sd || ','));
}

function format_naira(n, lend, lenw, sd, dd) {
    return '₦' + formatMoney(n, lend, lenw, sd, dd);
}

function extendPaymentDate(btn) {
    showAlertModal({
        title: 'Are you sure?',
        text: 'Deadline will be extended by 1 day',
        type: 'warning',
        showCancel: true,
        okAction: function () {
            ajaxUsingBtnURL(btn, function () {
                showAlertModal({
                    title: 'Deadline extended',
                    type: 'success',
                    okAction: function () {
                        window.location.reload();
                    }
                });
            });
        }
    });
}

function confirmWithoutReceipt(btn, ref) {
    showAlertModal({
        title: 'Confirm payment without receipt?',
        text: 'This action cannot be reverted. Make sure you have received this payment '
            + 'before performing this action',
        type: 'warning',
        showCancel: true,
        okAction: function () {
            //Ask for password
            var uref = prompt('Enter match reference, just to be sure');
            if (uref === ref) {
                ajaxUsingBtnURL(btn, function () {
                    showAlertModal({
                        title: 'Confirmed',
                        type: 'success',
                        okAction: function () {
                            window.location.reload();
                        }
                    });
                });
            } else {
                showAlertModal({
                    title: 'Wrong Match Reference',
                    text: 'The match reference you entered is wrong, please try again.'
                    , type: 'error'
                });
            }
        }
    });
}

function confirmPayment(btn) {
    showAlertModal({
        title: 'Are you sure?',
        text: 'This action cannot be reverted. Make sure you have received this payment '
            + 'before performing this action',
        type: 'warning',
        showCancel: true,
        okAction: function () {
            ajaxUsingBtnURL(btn, function () {
                showAlertModal({
                    title: 'Confirmed',
                    type: 'success',
                    okAction: function () {
                        window.location.reload();
                    }
                });
            });
        }
    });
}

function declinePayment(btn) {
    showAlertModal({
        title: 'Are you sure?',
        text: 'All other matches not paid for will also be declined and your account will be suspended',
        type: 'warning',
        showCancel: true,
        okAction: function () {
            ajaxUsingBtnURL(btn, function () {
                showAlertModal({
                    title: 'Payment declined',
                    type: 'success',
                    okAction: function () {
                        window.location.reload();
                    }
                });
            });
        }
    });
}

function fetchReceipts(btn, event) {
    event.preventDefault();
    ajaxUsingBtnURL(btn, function (data) {
        var html = '<div>';
        for (var img in data.images) {
            html += '<img width="100%" style="margin-top:5px" src="' + data.images[img] + '"/>';
        }
        html += '</div>';

        showAlertModal({text: html, type: ''});
    });
}

function ajaxUsingBtnURL(btn, callable, data) {
    $(btn).prop('disabled', true);
    showPageLoader();
    if (typeof data === 'undefined') {
        data = {};
    }

    iAjax({
        url: $(btn).attr('href'),
        data: data,
        onSuccess: function (data) {
            if (data.status) {
                callable(data);
            } else {
                showAlertModal({title: 'Oops!', text: data.message, type: 'error'});
            }
        },
        onFailure: function () {
            showAlertModal({
                title: 'Oops! Something went wrong',
                text: 'We could not process this request at the moment, please try again.'
                , type: 'error'
            });
        },
        onComplete: function () {
            hidePageLoader();
            $(btn).prop('disabled', false);
        }
    });
}

function ajaxUsingFormURL(form, callable, formData, options) {
    $('[type=submit]', form).prop('disabled', true);
    showPageLoader();

    //    Update data
    let data = null;
    if (typeof formData !== 'undefined') {
        data = $(form).serializeArray();
        for (var item in formData) {
            if (formData.hasOwnProperty(item)) {
                data.push({name: item, value: formData[item]});
            }
        }
    } else {
        data = $(form).serialize();
    }

    let setting = {
        url: $(form).attr('action'),
        data: data,
        method: 'POST',
        onSuccess: function (data) {
            if (data.status) {
                if (typeof callable === 'function') {
                    callable(data);
                } else {
                    notify($('.notify'), data);
                    // showAlertModal({'title': 'Success', 'text': data.message, 'type': 'success'});
                }
            } else {
                notify($('.notify'), data);
                // showAlertModal({title: 'Oops!', text: data.message, type: 'error'});
            }
        },
        onFailure: function (xhr, status, statusText) {
            handleHttpErrors(xhr, form);
            // showAlertModal({
            //     title: 'Oops! Something went wrong',
            //     text: 'We could not process this request at the moment, please try again.'
            //     , type: 'error'
            // });
        },
        onComplete: function () {
            hidePageLoader();
            $('[type=submit]', form).prop('disabled', false);
        }
    };

    //Update settings
    if (typeof options !== 'undefined') {
        setting = $.extend(setting, options);
    }
    iAjax(setting);
}

function showAlertModal(value, text) {
    var modal = $('#alertModal');

    if (typeof (value) === 'object') {
        var config = {
            title: '',
            text: '',
            type: 'info',
            okText: 'Ok',
            cancelText: 'Cancel',
            showCancel: false,
            okAction: null
        };
        config = $.extend(config, value);

        if (config['type'] === '' || config['type'] === null) {
            modal.find('img').hide();
        } else {
            modal.find('img').show().attr('src', homepage + '/images/alert/' + config['type'] + '.png');
        }

        if (config['title'] === '') {
            modal.find('.modal-title').hide();
        } else {
            modal.find('.modal-title').show().html(config['title']);
        }

        modal.find('.modal-text').html(config['text']);

        if (config['showCancel']) {
            modal.find('.modal-footer [data-dismiss]')
                .text(config['cancelText']).show();
        } else {
            modal.find('.modal-footer [data-dismiss]').hide();
        }

        modal.find('.modal-footer .ok')
            .text(config['okText'])
            .click(function (e) {
                $(this).off('click');
                modal.modal('hide');
                if (typeof (config['okAction']) === 'function') {
                    setTimeout(config['okAction'], 1000);
                }
            });
    } else {
        if (value === '') {
            modal.find('.modal-header').hide();
        } else {
            modal.find('.modal-header').show();
            modal.find('.modal-title').text(value);
        }

        modal.find('.modal-text').text(text);
        modal.find('.modal-footer [data-dismiss]').hide();
        modal.find('.modal-footer .ok').text('Ok')
            .click(function (e) {
                modal.modal('hide');
            });
    }

    //Show modal
    modal.modal({backdrop: 'static', show: true, keyboard: false});
}

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}

function showPageLoader() {
    $('#page-loader, #page-loader #loader').show();
}

function hidePageLoader() {
    $('#page-loader, #page-loader #loader').hide();
}
