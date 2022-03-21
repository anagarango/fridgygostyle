<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .logo_images img{
            width: 55%;
        }
        .logo_images div{
            margin-top: 80px;
        }
        .logo_information{
            padding: 10% 5%;
            width: 86vw;
            height: fit-content;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div class="logo_information">
        <h2>FridgyGo's Logo</h2>
        <p>
            Our preferred approach is that when we want to include our logo in a specific part, it would either just be the logo 
            with no wordmark or the logo along with the wordmark. We feel that the logo with the wordmark should be used in the header 
            since we want the person to associate the brand's name with the logo or for the important pages since we want to make sure 
            that our logo and brand are represented on those pages. The logo-only can be used for smaller sections like the footer.
        </p>
        <p>
            The shapes we used for the logo are a half circle representing the skin of an orange and a leaf, which our brand is 
            promoting food. While the other half-circle shows five people imitating the shape of orange slices, giving a sense that our 
            brand is about community. Having both these elements would say that our brand's primary focus is food and community.
        </p>
        <p>
            We wanted to stick to a sans-serif display font for the font style. Since we wanted our brand identity to present 
            innovativeness, we believed a serif font would look too fancy for our brand, which is all about community. It seemed 
            appropriate to have a thick font, so it stands out more and draws attention to it, making it feel important and serious.
        </p>
        <p>
            Some design principles we were working towards to incorporate into our logo are:
            <li>
                <strong>Symmetry</strong>, since we have two half circles creating a full circle where one of them is created from 5 people shapes 
                representing community.
            </li>
            <li><strong>Consistency</strong> for the use of the same person five times in the shape of a half-circle.</li>
            <li><strong>Unity</strong> is a very important design principle for us since our brand is about community, so we left some little 
                whitespace so it can be obvious that each orange slice is presented as a person while having a clear vision that 
                the people elements are together.
            </li>
        </p>
        <p>
            Around 15px all around, our logo should be left clearspace to ensure that it isn't distracted from other elements around it. 
            In the app, the logo size would be a 65px x 85px (W x H). For the wordmark and logo combination, use font <i>Black Burger Rough</i> 
            and align it center with the logo and the size of the whole logo would be either 80px x 145px (W x H) when stacked, or when 
            horizontal, 155px x 65px (W x H).
        </p>
        <div class="logo_images">
            <div>
                <h2>Final Logo</h2>
                <img src="imgs/final_logo.png" style="width: 17%;">
            </div>
            <div>
                <h2>Logo Colors</h2>
                <img src="imgs/grayscale_logo.png">
            </div>
            <div>
                <h2>Logo Variations</h2>
                <img src="imgs/variations_logo.png">
            </div>
            <div>
                <h2>Horizontal and Vertical Stack</h2>
                <img src="imgs/horizontal_logo.png" style="width: 40%; margin-right: 10%;">
                <img src="imgs/vertical_logo.png" style="width: 15%;">
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>