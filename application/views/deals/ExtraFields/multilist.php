<div class="newInputClass" data-type="5" data-new="true">
    <p><span class="newInputTitle">
        <a data-toggle="tooltip" data-placement="right" title="Измените значение" href="#" onclick="editInputTitle(this);"><?=$name;?></a></span>
        <a class="pull-right text-muted" href="#" onclick="removeNewInput(this);">[x]</a>&nbsp;
        <a class="pull-right m-r-xs text-muted" href="#" onclick="changePosition(this);" data-type="up"><i class="i i-arrow-up text"></i><i class="i i-arrow-up text-active"></i></a>
        <a class="pull-right m-r-xs text-muted" href="#" onclick="changePosition(this);" data-type="down"><i class="i i-arrow-down text"></i><i class="i i-arrow-down text-active"></i></a>
    </p>
    <select multiple class="form-control m-t" name="extra_fields[]">
        <?php foreach($values AS $value):?>
            <option><?=$value;?></option>
        <?php endforeach;?>
    </select>
</div>