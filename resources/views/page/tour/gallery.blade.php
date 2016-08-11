@extends('layout.tour')

@section('content')






    <div class="panel panel-default">
        <div class="wrapper-md">


            <script type="text/javascript">
                function delElem(elem) {

                    var countFiles = document.getElementById("fileselect").files;

                    for (var i = 0; i < countFiles.length; i++) {

                        if (countFiles[i]['name'] == $(elem).parent().text()) {
                            var files = [].slice.call(countFiles);
                            files.splice(i, 1); //whatever works for normal array
                            $('#fileselect').attr('value', files);

                        }
                    }
                    $(elem).parent().remove();
                    console.log(document.getElementById("fileselect").files);

                }
            </script>

            <div class="stepwizard">
                <div class="stepwizard-row setup-panel col-xs-12">
                    <div class="stepwizard-step col-xs-4">
                        <a href="#step-1" type="button" class="btn btn-circle btn-default btn-primary"><i class="fa fa-eye"></i></a>

                        <h5>Выбор услуги</h5>
                    </div>

                    <div class="stepwizard-step col-xs-4">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-file-word-o"></i></a>

                        <h5>Прикрепить файлы</h5>
                    </div>

                    <div class="stepwizard-step col-xs-4">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-pencil-square-o"></i></a>

                        <h5>Описание работы</h5>
                    </div>


                </div>
            </div>

            <form role="form" method="post" class="order" action="http://falconediting.com/ru/order" enctype="multipart/form-data">
                <div class="row setup-content" id="step-1" style="display: block;">
                    <div class="col-md-12">

                        <div class="padder-v">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="checkbox">
                                        <label class="i-checks">
                                            <input type="checkbox" class="select-disable" data-activion="4" name="type[4][id]" value=" 4" checked="">
                                            <i></i>
                                            Редактирование научных работ
                                        </label>
                                    </div>
                                </div>


                                <div class="col-xs-4 pull-right">
                                    <select class="form-control input-sm select-disable-4" name="type[4][speed]">
                                        <option value="Economy">
                                            Эконом
                                        </option>
                                        <option value="Standard">
                                            Стандарт
                                        </option>
                                        <option value="Express">
                                            Экспресс
                                        </option>
                                        <option value="Custom">
                                            Индивидуальный
                                        </option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="checkbox">
                                        <label class="i-checks">
                                            <input type="checkbox" class="select-disable" data-activion="5" name="type[5][id]" value=" 5" checked="">
                                            <i></i>
                                            Перевод научных работ
                                        </label>
                                    </div>
                                </div>


                                <div class="col-xs-4 pull-right">
                                    <select class="form-control input-sm select-disable-5" name="type[5][speed]">
                                        <option value="Economy">
                                            Эконом
                                        </option>
                                        <option value="Standard">
                                            Стандарт
                                        </option>
                                        <option value="Express">
                                            Экспресс
                                        </option>
                                        <option value="Custom">
                                            Индивидуальный
                                        </option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="checkbox">
                                        <label class="i-checks">
                                            <input type="checkbox" class="select-disable" data-activion="6" name="type[6][id]" value=" 6" checked="">
                                            <i></i>
                                            Форматирование научных работ
                                        </label>
                                    </div>
                                </div>



                            </div>
                            <div class="row">
                                <div class="col-xs-6">

                                    <div class="checkbox">
                                        <label class="i-checks">
                                            <input type="checkbox" class="select-disable" data-activion="7" name="type[7][id]" value=" 7" checked="">
                                            <i></i>
                                            Илюстрирование научных работ
                                        </label>
                                    </div>

                                </div>



                            </div>
                        </div>

                        <button class="btn btn-default nextBtn pull-right" type="button">Далее</button>
                    </div>
                </div>
                <div class="row setup-content" id="step-2" style="display: none;">
                    <div class="col-md-12">

                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                            <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Выбрать файл</span><span class="fileinput-exists">Изменить</span><input type="file" name="files[]" required=""></span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Удалить</a>
                        </div>


                        <div id="NewUploader">

                        </div>


                        <hr>
                        <p class="text-center"><a class="btn btn-link" id="MoreUpload"> <i class="fa fa-plus"></i> Больше</a></p>
                        <hr>


                        <button class="btn btn-default nextBtn pull-right" type="button">Далее</button>

                    </div>

                </div>

                <div class="row setup-content" id="step-3" style="display: none;">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Название работы</label>
                            <input maxlength="200" type="text" name="name" required="required" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Описание работы (укажите, какие файлы модифицировать)</label>
                            <textarea rows="20" class="form-control" name="text" required="required"></textarea>
                        </div>

                        <div class="form-group" id="izdanie2">
                            <label class="control-label"> Научное издание, для которого подготавливается работа</label>
                            <input rows="20" class="form-control" name="izdanie">
                        </div>


                        <div class="form-group">
                            <label class="control-label"> Желаемый стиль английского языка</label>
                            <select name="langOrder_id" required="" class="form-control">

                                <option value="3">
                                    Британский английский
                                </option>


                                <option value="4">
                                    Американский английский
                                </option>

                            </select>
                        </div>


                        <input type="hidden" name="_token" value="zcVkezQksy6NGVPCTwcb5QiUpxo7eKb7dvhb8SiR">
                        <button class="btn btn-primary pull-right" type="submit">Отправить</button>

                    </div>
                </div>
            </form>


            <script>
                window.onload = function() {


                    $(document).ready(function () {

                        var myhtml = '<div class="fileinput fileinput-new input-group" data-provides="fileinput">';
                        myhtml += '<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>';
                        myhtml += '<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Выбрать файл</span><span class="fileinput-exists">Изменить</span><input type="file" name="files[]"></span>';
                        myhtml += ' <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Удалить</a>';
                        myhtml += '</div>';

                        $("#MoreUpload").click(function () {
                            $("#NewUploader").html(
                                    $("#NewUploader").html() + myhtml
                            );
                        });


                        $(".select-disable").each(function () {
                            if (!this.checked) {
                                var idService = $(this).data('activion');
                                $(".select-disable-" + idService).attr("disabled", true);
                            }
                        }).change(function () {
                            if (this.checked) {
                                var idService = $(this).data('activion');
                                $(".select-disable-" + idService).attr("disabled", false);
                            }
                            else {
                                var idService = $(this).data('activion');
                                $(".select-disable-" + idService).attr("disabled", true);
                            }
                        });


                        //Проверка состояния загрузки файлов
                        $("#fileselect").on('click', function () {
                            var obj = $("#messages");

                            //Если юзер берет файлы то очищаем те которые он уже залил
                            $('li', obj).each(function () {
                                $(this).remove();
                            });

                            //Количество файлов, хз зачем я это сделал
                            //var countFiles = this.files.length;

                        });

                        $('.nextBtn').click(function () {
                            var checket = $(".order input[type='radio']:checked").val();
                            if (checket == 6) {
                                $('#izdanie').removeClass('hidden');
                            }
                            else {
                                $('#izdanie').addClass('hidden');
                            }
                        });


                        var navListItems = $('div.setup-panel div a'),
                                allWells = $('.setup-content'),
                                allNextBtn = $('.nextBtn');

                        allWells.hide();

                        navListItems.click(function (e) {
                            e.preventDefault();
                            var $target = $($(this).attr('href')),
                                    $item = $(this);

                            if (!$item.hasClass('disabled')) {
                                navListItems.removeClass('btn-primary').addClass('btn-default');
                                $item.addClass('btn-primary');
                                allWells.hide();
                                $target.show();
                                $target.find('input:eq(0)').focus();
                            }
                        });

                        allNextBtn.click(function () {
                            var curStep = $(this).closest(".setup-content"),
                                    curStepBtn = curStep.attr("id"),
                                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                                    isValid = true;

                            $(".form-group").removeClass("has-error");
                            for (var i = 0; i < curInputs.length; i++) {
                                if (!curInputs[i].validity.valid) {
                                    isValid = false;
                                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                                }
                            }

                            if (isValid)
                                nextStepWizard.removeAttr('disabled').trigger('click');
                        });

                        $('div.setup-panel div a.btn-primary').trigger('click');
                    });

                };
            </script>


        </div>

    </div>










    <div class="container m-t-xxl">
    <div class="col-md-10 col-md-offset-1">


        <section class="vbox">
            <section class="scrollable padder-lg w-f-md" id="bjax-target">




                <div class="row row-sm">


                    <div class="mansory">

                        <div class="row">

                            @for ($i = 0; $i < 11; $i++)

                                <div class="item">
                                    <div class="pos-rlt">
                                        <a class="fancybox" href="/img/c{{$i}}.jpg" rel="gallery">
                                            <img src="/img/c{{$i}}.jpg" alt="" class="r r-2x img-full">
                                        </a>

                                    </div>
                                </div>

                            @endfor


                        </div>
                    </div>

                </div>





            </section>
        </section>
    </div>
</div>
@endsection