<form>
    <textarea rows="2" cols="60" name="text">The quick brown fox.!!! jumped over..// the lazy dog.!</textarea><br/>
    <input type="submit" name="submit" value="Count words">
</form>

<?php
if (isset($_GET['submit'])) {
    $text = strtolower($_GET['text']);
    $seminar = (str_word_count($text, 1));
    $words_arr = array_count_values($seminar); ?>
    <table border="1">
 <?php foreach($words_arr as $word=>$occurencies) :  ?> 
            <tr>
                <td><?php echo $word; ?></td>
                <td><?php echo $occurencies; ?></td>
            </tr>
<?php endforeach; ?>
    </table>
<?php    
}