<!-- alternate entry -->
<div class="modal" id="alternateEntry-modal">
  <h2>Fifth Third Bank Holiday Payback Sweepstakes</h2>
  <h3>Alternate Entry</h3>
  <a class="officialRules" href="#">>> Offical Rules</a>
  <form id="sweepStakesForm" method="POST">
    <div class="field">
      <label for="first-name">First Name:</label>
      <input name-"first-name" type="text" required />
    </div>

    <div class="field">
      <label for="last-name">Last Name:</label>
      <input for="last-name" type="text" required />
    </div>

    <div class="field">
      <label for="address">Address:</label>
      <input for="address" type="text" class="two-col" required />
    </div>    

    <div class="field">
      <label for="city">City:</label>
      <input name="city" type="text" style="width: 169px;" required />
    </div>

    <div class="field">
      <label for="state" style="width:60px;">State:</label>
      <input name="state" type="text" class="three-col" style="width: 35px;" required />
    </div>

    <div class="field">
      <label for="zip">Zip Code:</label>
      <input name="zip" type="text" class="three-col" required />
    </div>

    <div class="field">
      <label for="phone">Phone:</label>
      <input name="phone" type="text" class="even" required />
    </div>

    <div class="field">
      <label for="email" style="width: 60px;">Email:</label>
      <input name="email" type="email" style="width: 208px;" required />
    </div>         

    <div class="field">
      <p class="label">Are you a fifth third bank customer?</p>
      <div class="radio">
        <input id="yes" value="yes" type="radio" name="customer" required />
        <label for="yes">Yes</label>
     </div>
      <div class="radio">
        <input id="no" value="no" type="radio" name="customer" required />
        <label for="no">No</label>
     </div>     
    </div>

    <div class="field">
      <p class="label" style="width: 300px;">PLEASE PLACE THIS ENTRY INTO THE <span>(SELECT ONE)</span></p>
      <div class="radio big">
        <input id="credit" value="credit" type="radio" name="customer" required />
        <label for="credit">Credit</label>
     </div>
      <div class="radio big">
        <input id="debit" value="debit" type="radio" name="customer" required />
        <label for="debit">Debit</label>
     </div>     
      <p class="label" style="width: 150px;">PORTION OF THE SWEEPSTAKES.</p>
    </div>    

    <div class="field" style="clear:both;">
      <input name="accept" type="checkbox" />
      <p style="float:left; margin-right: 10px;">BY CLICKING SUBMIT, I AGREE TO THE <a class="officialRules" href="#">OFFICAL RULES</a> OF THIS SWEEPSTAKES</p>
      <button type="submit">Submit</button>
    </div>

    <div class="field" style="width:100%;">
      <p class="required">ALL FIELDS ARE REQUIRED</p>
    </div>
  </form>

  <script>
    $(document).ready(function(){
        $('#sweepStakesForm').html5form({
          async : false, // cancels the default submit method.
          method : 'GET', // changes the request method.
          action : '<?php echo get_template_directory_uri(); ?>/doFormSubmit.php', // changes the action method.
          responseDiv : '#respuesta' // a content div to get the callback function response.
        });    
    });
  </script>

</div>

<!-- official rules -->
<div class="modal" id="officialRules-modal">
  <ul class="tabs">
      <li class="selected"><a href="#credit">Credit</a></li>
      <li class="sep">|</li>
      <li><a href="#debit">Debit</a></li>
      <li class="sep">|</li>
      <li><a href="#facebook">Facebook</a></li>
      <li class="sep">|</li>
      <li><a href="#twitter">Twitter</a></li>
      <!-- ... -->
  </ul>
  <div class="tab" id="credit">
    <div class="rules-container">
      <?php include('credit-rules.php'); ?>
    </div>
  </div>

  <!-- debit -->
  <div class="tab" id="debit">
    <div class="rules-container">
      <?php include('debit-rules.php'); ?>
    </div>
  </div>

  <!-- facebook -->
  <div class="tab" id="facebook">
    <div class="rules-container">
      <?php include('facebook-rules.php'); ?>
    </div>
  </div>  

  <!-- twitter -->
  <div class="tab" id="twitter">
    <div class="rules-container">
      <?php include('twitter-rules.php'); ?>
    </div>
  </div>   
</div>

<!-- privacy policy rules -->
<div class="modal" id="privacyPolicy-modal">
  <p>privacyPolicy</p>
</div>

<!-- twitter sweepstakes -->
<div class="modal" id="twitterSweepstakes-modal">
  <h2>twitter Sweepstakes</h2>
  <p>Join us on Twitter between November 21 and November 26 for a chance to win!</p>

  <h2>how Do You Enter?</h2>
  <p><strong>Step One:</strong> Follow @Fifth Third on Twitter.</p>

  <p><strong>Step Two:</strong> Tweet the following between 11/12 and 11/26:
         RT 4 chance 2 win a $100 Fifth Third Bank Gift Card. Follow @Fifth Third for 
         #HolidayPayback info. More at bit.ly/RetCAP. </p>
    
  <p><strong>Step Three:</strong> Tweet every day for more chances to win!</p>

  <h2>what Could You Win?</h2>
  <p>Each day, we’ll select 5 followers to win a $100 Fifth Third Bank Gift Card!</p>

  <a class="officialRules" id="officialRules" href="#">Offical Rules</a>
</div>

<!-- facebook sweepstakes -->
<div class="modal" id="facebookSweepstakes-modal">
  <h2>FACEBOOK SWEEPSTAKES</h2>
  <p>Join us on Facebook every Friday - November 9, 2012 through December 28, 2012 for a chance to win great prizes.</p>

  <h2>HOW DO YOU ENTER?</h2>
  <p><strong>Step One:</strong> Like us on Facebook at www.Facebook.com/FifthThirdBank</p>

  <p><strong>Step Two:</strong> Click on the “Fifth Third Bank Holiday Payback tab” or click here</p>
  [insert bit.ly link to tab]
  
  <p><strong>Step Three:</strong> Provide an answer, right or wrong, to our weekly question and you’ll receive an entry for that week’s prize.</p>

  <h2>WHAT COULD YOU WIN?</h2>
  <p>Each week, we’ll be selecting one (1) winner to win great prizes like iPads, Keurigs, and other great stuff!</p>

  <a class="officialRules" href="#">>> Offical Rules</a>

  <div class="sub">iPad® is a registered trademark of Apple Inc. All rights reserved. Apple is not a participant in or sponsor of this promotion. "Keurig"® and is a registered trademark of Keurig Incorporated. Keurig is not a participant in or sponsor of this promotion.</div>
</div>

<!-- "see details" -->
<div class="modal" id="seeDetails-modal">
  <h2>PUT THE WIN IN WINTER</h2>
  <p>Every time you use your credit or debit card you’re automatically entered to win!</p>

  <h2>WHAT IS IT?</h2>
  <p>Our way of saying thanks to our customers by giving them a chance to win a “holiday payback” up to $2,000 just for using their credit or debit card this holiday season.</p>

  <h2>HOW DO YOU ENTER?</h2>
  <p>Simply use your Fifth Third Bank credit or debit card on Black Friday, Cyber Monday, or any other day between 11/1/12 and 12/30/12. Every qualifying purchase is one entry for a chance to win.</p>

  <h2>WHAT COULD YOU WIN?</h2>
  <p>We’ll be selecting 100 customers to win a “holiday payback” – a statement credit for every card purchase made that day – up to $2,000.</p>

  <p class="larger">The more you use your card, the more chances to win, and the bigger the payback!</p>

  <a class="officialRules" id="officialRules">Official Rules</a>
</div>

<!-- sweep stakes submit confirmation -->
<div class="modal" id="sweepStakesConfirm-modal">
  <h2>Fifth Third Bank Holiday Payback Sweepstakes</h2>
  <div class="thanks">Thank You!</div>
  <p>Your Entry Has Been Received.</p>
  <p>Don’t Forget To Like Us On <strong>Facebook</strong> Or Follow Us On <strong>Twitter</strong> For Even More Chances To Win!</p>
  <a class="officialRules" href="#">>> Offical Rules</a>
</div>