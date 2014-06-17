
<div id="<?=$newFieldId;?>"></div>

<p class="m-t">
    <div class="btn-group dropup" data-name="<?=$newFieldId;?>">
      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Добавить поле&nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#" onclick="addNewInput(this);" data-type="1">Текст</a></li>
        <li><a href="#" onclick="addNewInput(this);" data-type="2">Число</a></li>
        <li><a href="#" onclick="addNewInput(this);" data-type="3">Флаг</a></li>
        <li><a href="#" onclick="addNewInput(this);" data-type="4">Список</a></li>
        <li><a href="#" onclick="addNewInput(this);" data-type="5">Мультисписок</a></li>
        <li><a href="#" onclick="addNewInput(this);" data-type="6">Дата</a></li>
        <li><a href="#" onclick="addNewInput(this);" data-type="7">Ссылка</a></li>
        <li><a href="#" onclick="addNewInput(this);" data-type="8">Переключатель</a></li>
      </ul>
    </div>
</p>

<script>
    
    var array;
    var info;
    
    window.onload = function(){
        
        $("#nextStep").click(function(){
            array = new Array(); //Здесь находятся типы полей, которые передаем в облако
            array2 = new Array(); //Здесь находся значения и типы полей, которые добавляются к каждой сделке
            $("#step1 [data-new='true']").each(function(index){
                values = new Array();
                values2 = new Array();
                var a = new Array(
                        $(this).find("a").first().text()
                        , getTextFromType(parseInt($(this).attr("data-type")))
                );
                var b = new Array(a[0], a[1]);
                if(a[1] == "multilist" || a[1] == "list")
                {
                    $(this).find("select").find("option").each(function(index){
                        values.push($(this).text());
                        if($(this).is(":selected"))
                        {
                            values2.push($(this).text());
                            if(a[1] == "list")
                                b.push(values2[0]);
                        }
                    });
                    a.push(values);
                    if(a[1] != "list")
                        b.push(values2);
                }
                else if(a[1] == "flag")
                {
                    b.push( $(this).find("input").is(":checked") );
                }
                else if(a[1] == "switch")
                {
                    $(this).find("input").each(function(index){
                        values.push($(this).val());
                        if($(this).is(":checked"))
                            b.push($(this).val());
                    });
                    a.push(values);
                }
                else
                {
                    b.push( $(this).find("input").val() );
                }
                array.push(a);
                array2.push(b);
            });
            $.post( "http://localhost/CRM/ajax/changeExtraFields", {json: JSON.stringify(array)}, function(data){
                if(data == "1")
                {
                    $("[name='deal_fields']").val(JSON.stringify(array2));
                }
            });
            //console.log(array2);
        });
        
    }
    
    function getTextFromType(type){
        switch(type){
            case 1: return "text";
            case 2: return "number";
            case 3: return "flag";
            case 4: return "list";
            case 5: return "multilist";
            case 6: return "date";
            case 7: return "url";
            case 8: return "switch";
        }
    }
    
    function generateJS(){
        $(".datepicker-input").each(function(){ $(this).datepicker();});
    }
    
    function addNewInput(thisis){
        //Тип выбранного поля
        var type = $(thisis).attr("data-type");
        //Определяем ID элемента, перед которым вставляем новые поля
        var id = $(thisis).parents(".btn-group").attr("data-name");
        var input = '';
        input += '<div class="newInputClass" data-type="'+ type +'" data-new="true">'
        input += '<p><span class="newInputTitle">\n\
            <a data-toggle="tooltip" data-placement="right" title="Измените значение" href="#" onclick="editInputTitle(this);">Новое поле</a></span>\n\
            <a class="pull-right text-muted" href="#" onclick="removeNewInput(this);">[x]</a>&nbsp;\n\
            <a class="pull-right m-r-xs text-muted" href="#" onclick="changePosition(this);" data-type="up"><i class="i i-arrow-up text"></i><i class="i i-arrow-up text-active"></i></a>\n\
            <a class="pull-right m-r-xs text-muted" href="#" onclick="changePosition(this);" data-type="down"><i class="i i-arrow-down text"></i><i class="i i-arrow-down text-active"></i></a>\n\
        </p>\n';
        if(type == 1){
            input += '<input name="extra_fields[]" type="text" class="form-control">';
        }else if(type == 2){
            input += '<input name="extra_fields[]" type="text" data-trigger="change" data-required="true" class="form-control" data-type="number">';
        }
        else if(type == 3){
            input += '<div class="clear"></div><div class="checkbox i-checks"><label><input name="extra_fields[]" type="checkbox" value=""> <i></i></label></div>';
        }
        else if(type == 4){
            input += '<div>'
            input += '<div><input type="text" class="form-control input-sm" placeholder="Вариант №1"></div>'
            input += '<div class="m-t-xs"><input type="text" class="form-control input-sm" placeholder="Вариант №2"></div>';
            input += '<div class="newList"></div>';
            input += '<div class="m-t-xs" align="center">\n\
                        <a href="#" onclick="addNewChildList(this);">Добавить вариант</a>&nbsp;|&nbsp;\n\
                        <a href="#" onclick="saveNewChildList(this);">Сохранить</a>\n\
                    </div></div>'
        }
        else if(type == 5){
            input += '<div>'
            input += '<div><input type="text" class="form-control input-sm" placeholder="Вариант №1"></div>'
            input += '<div class="m-t-xs"><input type="text" class="form-control input-sm" placeholder="Вариант №2"></div>';
            input += '<div class="newList"></div>';
            input += '<div class="m-t-xs" align="center">\n\
                        <a href="#" onclick="addNewChildList(this);">Добавить вариант</a>&nbsp;|&nbsp;\n\
                        <a href="#" onclick="saveNewChildMultiList(this);">Сохранить</a>\n\
                    </div></div>'
        }
        else if(type == 6){
            input += '<input name="extra_fields[]" class="datepicker-input form-control" size="16" type="text" value="12-02-2013" data-date-format="dd-mm-yyyy" >';
            input += '';
        }else if(type == 7){
            input += '<input name="extra_fields[]" type="text" class="form-control" data-trigger="change" data-required="true" data-type="url">';
        }else if(type == 8){
            input += '<div>'
            input += '<div><input type="text" class="form-control input-sm" placeholder="Вариант №1"></div>'
            input += '<div class="m-t-xs"><input type="text" class="form-control input-sm" placeholder="Вариант №2"></div>';
            input += '<div class="newList"></div>';
            input += '<div class="m-t-xs" align="center">\n\
                        <a href="#" onclick="addNewChildList(this);">Добавить вариант</a>&nbsp;|&nbsp;\n\
                        <a href="#" onclick="saveRadioBoxes(this);">Сохранить</a>\n\
                    </div></div>'
        }
        input += '</div>';
        $("#" + id).before($(input).fadeIn());
        generateJS();
    }
        
    function changePosition(thisis){
        var type = $(thisis).attr("data-type");
        if(type === "up"){
            $(thisis).parents(".newInputClass").insertBefore( $(thisis).parents(".newInputClass").prev(".newInputClass") );
        }
        else if(type === "down"){
            $(thisis).parents(".newInputClass").insertAfter( $(thisis).parents(".newInputClass").next(".newInputClass") );
        }
    }
    
    function saveRadioBoxes(thisis){
        var ed = $(thisis).parent().parent().find("input");
        html = "";
        $.each(ed, function(){
            html += '<div class="radio i-checks"><label> <input type="radio" name="a" value="'+ $(this).val() +'"> <i></i> '+ $(this).val() +' </label></div>';
        });
        $(thisis).parent().parent().html(html);
    }
        
    function saveNewChildMultiList(thisis){
        var ed = $(thisis).parent().parent().find("input");
        var html = '<select multiple class="form-control" name="extra_fields[]">';
        $.each(ed, function(){
            html += '<option>' + $(this).val() + '</option>';
        });
        html += '</select>';
        $(thisis).parent().parent().html(html);
    }
    
    function saveNewChildList(thisis){
        var ed = $(thisis).parent().parent().find("input");
        var html = '<select class="form-control m-t" name="extra_fields[]">';
        $.each(ed, function(){
            html += '<option value="' + $(this).val() + '">' + $(this).val() + '</option>';
        });
        html += '</select>';
        $(thisis).parent().parent().html(html);
    }
    
    function addNewChildList(thisis){
        $(thisis).parent().prev().before("<div class='input-group m-t-xs'><input name='variant' placeholder='' type='text' class='form-control input-sm' /><span class='input-group-addon'><a href='#' onclick='remNewChildList(this);'>Х</a></span></div>");
    }
    
    function remNewChildList(thisis){
        $(thisis).parents("div.input-group").fadeOut().remove();
    }
    
    function saveInputTitle(thisis){
        var text = $(thisis).parents("span.newInputTitle").find("input").val();
        $(thisis).parents("span.newInputTitle").html('<a data-toggle="tooltip" data-placement="right" title="Измените значение" href="#" onclick="editInputTitle(this);">' + text + '</a>');
    }   
    
    function editInputTitle(thisis){
        $(thisis).parents("span.newInputTitle").html("<div style='width: 250px;float:left;padding-bottom: 10px;' class='input-group'><input value='" + $(thisis).text() + "' placeholder='Введите название поля' type='text' class='form-control input-sm' /><span class='input-group-addon'><a href='#' onclick='saveInputTitle(this);'>Save</a></span></div>")
    }

    function removeNewInput(thisis) { 
        if(confirm("Вы уверены что хотите удалить поле?"))
            $(thisis).parents("div.newInputClass").fadeOut();
    }
</script>
