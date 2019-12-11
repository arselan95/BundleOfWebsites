
<form action="product_reviews_section/review_post.php" method="post" accept-charset="utf-8">
    <fieldset class="rating"> <legend>Review this Product</legend>
        <input required type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
        <input required type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
        <input required type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
        <input required type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
        <input required type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
        <input required type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
        <input required type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
        <input required type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
        <input required type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
        <input required type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
        <p> Review:</p >
        <textarea name="feedback" rows="8" cols="100" >
       </textarea>
        <p><input type="submit" value="Submit Review"></p >
        <input type="hidden" name="product_type" value=<?php echo $product_type; ?> id="product_type">
        <input type="hidden" name="product_id" value=<?php echo $product_id; ?> id="product_id">
    </fieldset>
</form>
<?php
// echo "current id: ".$product_id;
// echo "current type:".$product_type;
 ?>
