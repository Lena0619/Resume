<div style="width:99%; height:87%; margin:auto; overflow:auto;">
    <h3>圖片管理</h3>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $pictures=$Picture->all();
                    foreach ($pictures as $pic) {
                        $isChk = ($pic['sh'] == 1) ? 'checked' : '';
                ?>
                <tr class="cent">
                    <td width="68%"><img src='img/<?=$pic['img'];?>' style="width:100px;height:100px"></td>
                    <td width="7%"><input type="checkbox" name="sh[]" value="<?=$pic['id'];?>" <?=$isChk;?>> </td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$pic['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$pic['id'];?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/picture.php?table=<?=$do;?>&#39;)"
                            value="新增大頭照"></td>
                    <input type="hidden" name="table" value='<?=$do;?>'>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>