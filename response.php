<?php include 'header.php'; ?>
<html>
    <head>
        <title>RESPOSNSE FORM</title>
        <link rel="stylesheet" href="mystyles1.css">
    </head>
<script>

function toggleForm(formId) {
    const forms = document.querySelectorAll('.aggregate-form');
    forms.forEach(form => {
        form.style.display = (form.id === formId && form.style.display !== 'block') ? 'block' : 'none';
    });
}
//UET-Taxila Aggregate calcualtor
function calculateUETAggregate() {
    const form = document.getElementById("form4");
    const inputs = form.getElementsByTagName("input");

    const matricTotal = parseFloat(inputs[0].value);
    const matricObt = parseFloat(inputs[1].value);
    const fscTotal = parseFloat(inputs[2].value);
    const fscObt = parseFloat(inputs[3].value);
    const entryTestObt = parseFloat(inputs[4].value); // Out of 400

    const resultDiv = document.getElementById("uet-result");

    // Validation
    if (
        isNaN(matricTotal) || isNaN(matricObt) ||
        isNaN(fscTotal) || isNaN(fscObt) || isNaN(entryTestObt)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    if (
        matricTotal <= 0 || fscTotal <= 0 || entryTestObt < 0 ||
        matricObt < 0 || fscObt < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Invalid or negative values entered.</span>";
        return;
    }

    // Calculate Percentages
    const matricPercent = (matricObt / matricTotal) * 100;
    const fscPercent = (fscObt / fscTotal) * 100;
    const entryTestPercent = (entryTestObt / 400) * 100;

    // Apply UET Taxila Weightages
    const aggregate = (matricPercent * 0.17) + (fscPercent * 0.50) + (entryTestPercent * 0.33);

    resultDiv.innerHTML = `<div class='bold-result'>Your UET Taxila Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}

// PIEAS Aggregate Calculator
function calculatePIEASAggregate() {
    const form = document.getElementById("form3");
    const inputs = form.getElementsByTagName("input");

    const matricTotal = parseFloat(inputs[0].value);
    const matricObt = parseFloat(inputs[1].value);
    const fscTotal = parseFloat(inputs[2].value);
    const fscObt = parseFloat(inputs[3].value);
    const entryMarks = parseFloat(inputs[4].value); // Out of 100

    const resultDiv = document.getElementById("pieas-result");

    if (
        isNaN(matricTotal) || isNaN(matricObt) ||
        isNaN(fscTotal) || isNaN(fscObt) ||
        isNaN(entryMarks)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    if (
        matricTotal <= 0 || fscTotal <= 0 ||
        matricObt < 0 || fscObt < 0 || entryMarks < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Invalid input values.</span>";
        return;
    }

    const matricPercent = (matricObt / matricTotal) * 100;
    const fscPercent = (fscObt / fscTotal) * 100;
    const entryPercent = (entryMarks / 100) * 100; // PIEAS test is out of 100

    const aggregate = (matricPercent * 0.15) + (fscPercent * 0.25) + (entryPercent * 0.60);

    resultDiv.innerHTML = `<div class='bold-result'>Your PIEAS Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}


function calculateAggregate() {
    alert("Aggregate calculation logic goes here...");
}
// NUST Aggregate Calculator
function calculateNUSTAggregate() {
    const form = document.getElementById("form1");
    const inputs = form.getElementsByTagName("input");

    const matricTotal = parseFloat(inputs[0].value);
    const matricObt = parseFloat(inputs[1].value);
    const fscTotal = parseFloat(inputs[2].value);
    const fscObt = parseFloat(inputs[3].value);
    const entryObt = parseFloat(inputs[4].value); // Out of 200

    const resultDiv = document.getElementById("nust-result");

    // Validate input presence
    if (
        isNaN(matricTotal) || isNaN(matricObt) ||
        isNaN(fscTotal) || isNaN(fscObt) || isNaN(entryObt)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    // Validate input positivity
    if (
        matricTotal < 0 || matricObt < 0 ||
        fscTotal < 0 || fscObt < 0 || entryObt < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Negative values are not allowed.</span>";
        return;
    }

    // Step 1: Calculate percentages
    const matricPercent = (matricObt / matricTotal) * 100;
    const fscPercent = (fscObt / fscTotal) * 100;
    const entryPercent = (entryObt / 200) * 100;

    // Step 2: Apply weightage
    const aggregate = (matricPercent * 0.05) + (fscPercent * 0.15) + (entryPercent * 0.80);

    // Step 3: Show result
    resultDiv.innerHTML = `<div class='bold-result'>Your NUST Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}
//--------------------for fast--------------------------------------------
</script>
<script>
function calculateFASTAggregate() {
    const form = document.getElementById("form2");
    const inputs = form.getElementsByTagName("input");

    const matricTotal = parseFloat(inputs[0].value);
    const matricObt = parseFloat(inputs[1].value);
    const fscTotal = parseFloat(inputs[2].value);
    const fscObt = parseFloat(inputs[3].value);
    const entryObt = parseFloat(inputs[4].value); // Entry test out of 100

    const resultDiv = document.getElementById("fast-result");

    // Validation
    if (
        isNaN(matricTotal) || isNaN(matricObt) ||
        isNaN(fscTotal) || isNaN(fscObt) || isNaN(entryObt)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    if (
        matricTotal <= 0 || fscTotal <= 0 ||
        matricObt < 0 || fscObt < 0 || entryObt < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Invalid or negative input values are not allowed.</span>";
        return;
    }

    // Step 1: Convert to percentage
    const matricPercent = (matricObt / matricTotal) * 100;
    const fscPercent = (fscObt / fscTotal) * 100;
    const entryPercent = entryObt; // already out of 100

    // Step 2: Apply weightage
    const aggregate = (matricPercent * 0.10) + (fscPercent * 0.40) + (entryPercent * 0.50);

    // Step 3: Display
    resultDiv.innerHTML = `<div class='bold-result'>Your FAST Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}
</script>

<script>
    //------------------------For ITU Lahore----------------------------------
function calculateITUAggregate() {
    const form = document.getElementById("form5");
    const inputs = form.getElementsByTagName("input");

    const fscTotal = parseFloat(inputs[0].value);
    const fscObt = parseFloat(inputs[1].value);
    const entryTotal = parseFloat(inputs[2].value);
    const entryObt = parseFloat(inputs[3].value);

    const resultDiv = document.getElementById("itu-result");

    // Validation
    if (
        isNaN(fscTotal) || isNaN(fscObt) ||
        isNaN(entryTotal) || isNaN(entryObt)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    if (
        fscTotal <= 0 || entryTotal <= 0 ||
        fscObt < 0 || entryObt < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Invalid or negative input values are not allowed.</span>";
        return;
    }

    // Step 1: Calculate percentages
    const fscPercent = (fscObt / fscTotal) * 100;
    const entryPercent = (entryObt / entryTotal) * 100;

    // Step 2: Apply weightage
    const aggregate = (fscPercent * 0.70) + (entryPercent * 0.30);

    // Step 3: Display result
    resultDiv.innerHTML = `<div class='bold-result'>Your ITU Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}
</script>

<script>
    // for PU Lahore
function calculatePUAggregate() {
    const form = document.getElementById("form6");
    const inputs = form.getElementsByTagName("input");

    const matricTotal = parseFloat(inputs[0].value);
    const matricObt = parseFloat(inputs[1].value);
    const fscTotal = parseFloat(inputs[2].value);
    const fscObt = parseFloat(inputs[3].value);
    const entryTotal = parseFloat(inputs[4].value);
    const entryObt = parseFloat(inputs[5].value);

    const resultDiv = document.getElementById("pu-result");

    // Validation
    if (
        isNaN(matricTotal) || isNaN(matricObt) ||
        isNaN(fscTotal) || isNaN(fscObt) ||
        isNaN(entryTotal) || isNaN(entryObt)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    if (
        matricTotal <= 0 || fscTotal <= 0 || entryTotal <= 0 ||
        matricObt < 0 || fscObt < 0 || entryObt < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Invalid or negative input values are not allowed.</span>";
        return;
    }

    // Calculate percentages
    const matricPercent = (matricObt / matricTotal) * 100;
    const fscPercent = (fscObt / fscTotal) * 100;
    const entryPercent = (entryObt / entryTotal) * 100;

    // Apply PU Lahore Weightages: 25% Matric + 50% FSc + 25% Entry Test
    const aggregate = (matricPercent * 0.25) + (fscPercent * 0.50) + (entryPercent * 0.25);

    // Show Result
    resultDiv.innerHTML = `<div class='bold-result'>Your PU Lahore Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}
</script>


<script>
    //for Comsats Islamabad
function calculateCOMSATSAggregate() {
    const form = document.getElementById("form7");
    const inputs = form.getElementsByTagName("input");

    const matricTotal = parseFloat(inputs[0].value);
    const matricObt = parseFloat(inputs[1].value);
    const fscTotal = parseFloat(inputs[2].value);
    const fscObt = parseFloat(inputs[3].value);
    const entryTotal = parseFloat(inputs[4].value);
    const entryObt = parseFloat(inputs[5].value);

    const resultDiv = document.getElementById("comsats-result");

    // Validation
    if (
        isNaN(matricTotal) || isNaN(matricObt) ||
        isNaN(fscTotal) || isNaN(fscObt) ||
        isNaN(entryTotal) || isNaN(entryObt)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    if (
        matricTotal <= 0 || fscTotal <= 0 || entryTotal <= 0 ||
        matricObt < 0 || fscObt < 0 || entryObt < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Invalid or negative input values are not allowed.</span>";
        return;
    }

    // Step 1: Calculate percentages
    const matricPercent = (matricObt / matricTotal) * 100;
    const fscPercent = (fscObt / fscTotal) * 100;
    const entryPercent = (entryObt / entryTotal) * 100;

    // Step 2: Apply COMSATS weightage
    const aggregate = (matricPercent * 0.10) + (fscPercent * 0.40) + (entryPercent * 0.50);

    // Step 3: Display result
    resultDiv.innerHTML = `<div class='bold-result'>Your COMSATS Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}


// for MDCAT 2025
function calculateMDCATAggregate() {
    const form = document.getElementById("form8");
    const inputs = form.getElementsByTagName("input");

    const matricTotal = parseFloat(inputs[0].value);
    const matricObt = parseFloat(inputs[1].value);
    const fscTotal = parseFloat(inputs[2].value);
    const fscObt = parseFloat(inputs[3].value);
    const mdcatObt = parseFloat(inputs[4].value); // Out of 200

    const resultDiv = document.getElementById("mdcat-result");

    // Validate presence
    if (
        isNaN(matricTotal) || isNaN(matricObt) ||
        isNaN(fscTotal) || isNaN(fscObt) || isNaN(mdcatObt)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    // Validate positivity
    if (
        matricTotal <= 0 || matricObt < 0 ||
        fscTotal <= 0 || fscObt < 0 || mdcatObt < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Invalid (zero or negative) values entered.</span>";
        return;
    }

    // Step 1: Percentages
    const matricPercent = (matricObt / matricTotal) * 100;
    const fscPercent = (fscObt / fscTotal) * 100;
    const mdcatPercent = (mdcatObt / 200) * 100;

    // Step 2: Apply official weights
    const aggregate = (matricPercent * 0.10) + (fscPercent * 0.40) + (mdcatPercent * 0.50);

    // Step 3: Display result
    resultDiv.innerHTML = `<div class='bold-result'>Your MDCAT Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}


// NUMS 
function calculateNUMSAggregate() {
    const form = document.getElementById("form9");
    const inputs = form.getElementsByTagName("input");

    const matricTotal = parseFloat(inputs[0].value);
    const matricObt = parseFloat(inputs[1].value);
    const fscTotal = parseFloat(inputs[2].value);
    const fscObt = parseFloat(inputs[3].value);
    const numsTest = parseFloat(inputs[4].value); // Out of 150

    const resultDiv = document.getElementById("nums-result");

    // Validate presence
    if (
        isNaN(matricTotal) || isNaN(matricObt) ||
        isNaN(fscTotal) || isNaN(fscObt) || isNaN(numsTest)
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Please enter all values correctly.</span>";
        return;
    }

    // Validate positivity
    if (
        matricTotal <= 0 || matricObt < 0 ||
        fscTotal <= 0 || fscObt < 0 || numsTest < 0
    ) {
        resultDiv.innerHTML = "<span style='color: red;'>Invalid (zero or negative) values entered.</span>";
        return;
    }

    // Step 1: Percentages
    const matricPercent = (matricObt / matricTotal) * 100;
    const fscPercent = (fscObt / fscTotal) * 100;
    const numsPercent = (numsTest / 150) * 100;

    // Step 2: Apply weights
    const aggregate = (matricPercent * 0.10) + (fscPercent * 0.40) + (numsPercent * 0.50);

    // Step 3: Display result
    resultDiv.innerHTML = `<div class='bold-result'>Your NUMS Aggregate is: <strong>${aggregate.toFixed(2)}%</strong></div>`;
}

</script>


<script>
    function appendValue(value) {
        const answerBox = document.getElementById("answerBox");
        if (value === '=') {
            try {
                answerBox.innerText = eval(answerBox.innerText);
            } catch {
                answerBox.innerText = "Error";
            }
        } else {
            if (answerBox.innerText === "Answer Area" || answerBox.innerText === "Error") {
                answerBox.innerText = value;
            } else {
                answerBox.innerText += value;
            }
        }
    }

    function clearAnswer() {
    document.getElementById("answerBox").innerText = " ";
}

</script>






    <body style="background-color: #c2f1f3; margin: 0; padding: 0;">
  
        <?php
          
            ?>
            <!-- Container to control position and width -->
<div class="main-layout">
  


<!---------------------Start of the University Grid------------------- -->
<!---------------------Start of the University Grid------------------- -->
<!---------------------Start of the University Grid------------------- -->

   <!-- <?php
        echo "<h1 class='fancy-heading1'>Welcome {$_POST['name']} !</h1>";
    ?> -->

    <div class="university-grid">
        <!-- University 1 -->
       <!-- NUST -->
<div class="university-box" onclick="event.stopPropagation(); toggleForm('form1')">
  <img src="nust-logo.png" alt="University Logo">
  <div class="university-content">
    <div class="university-name">NUST</div>
    <div class="university-desc">Click here to calculate your aggregate for NUST based on your scores.</div>
  </div>
</div>

<div class="aggregate-form" id="form1" style="display: none;">
  <div class="form-flex-container">
    <!-- Left Side: Input Fields -->
    <form>
      <label class="input-label">Matric Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Matric Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test Marks:</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculateNUSTAggregate()">Calculate</button>
    </form>

    <!-- Right Side: Result Display -->
   <div id="nust-result" class="aggregate-result">
 <strong> Your result will be displayed here.</strong>
</div>
  </div>
</div>


<!-- FAST -->
<div class="university-box" onclick="event.stopPropagation(); toggleForm('form2')">
  <img src="fast-logo.png" alt="University Logo">
  <div class="university-content">
    <div class="university-name">FAST-NUCES</div>
    <div class="university-desc">Click here to calculate your aggregate for FAST based on your scores.</div>
  </div>
</div>

<div class="aggregate-form" id="form2" style="display: none;">
  <div class="form-flex-container">
    <!-- Left Side: Input Fields -->
    <form>
      <label class="input-label">Matric Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Matric Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test percentage (%):</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculateFASTAggregate()">Calculate</button>
    </form>

    <!-- Right Side: Result Display -->
   <div id="uet-result" class="aggregate-result">
 <strong> Your result will be displayed here.</strong>
</div>
  </div>
</div>

<!-- PIEAS -->
       
<div class="university-box" onclick="event.stopPropagation(); toggleForm('form3')">
  <img src="pieas-logo.jpg" alt="University Logo">
  <div class="university-content">
    <div class="university-name">PIEAS</div>
    <div class="university-desc">Click here to calculate your aggregate for PIEAS based on your scores.</div>
  </div>
</div>

<div class="aggregate-form" id="form3" style="display: none;">
  <div class="form-flex-container">
    <!-- Left Side: Input Fields -->
    <form>
      <label class="input-label">Matric Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Matric Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test Marks(out of 100):</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculatePIEASAggregate()">Calculate</button>
    </form>

    <!-- Right Side: Result Display -->
   <div id="pieas-result" class="aggregate-result">
 <strong> Your result will be displayed here.</strong>
</div>
  </div>
</div>

<!-- UET Taxila -->
<div class="university-box" onclick="event.stopPropagation(); toggleForm('form4')">
  <img src="uet-tax-logo.jpg" alt="University Logo">
  <div class="university-content">
    <div class="university-name">UET-TAXILA</div>
    <div class="university-desc">Click here to calculate your aggregate for UET-TAXILA based on your scores.</div>
  </div>
</div>

<div class="aggregate-form" id="form4" style="display: none;">
  <div class="form-flex-container">
    <!-- Left Side: Input Fields -->
    <form>
      <label class="input-label">Matric Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Matric Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">ECAT Marks(out of 400):</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculateUETAggregate()">Calculate</button>
    </form>

    <!-- Right Side: Result Display -->
   <div id="uet-result" class="aggregate-result">
 <strong> Your result will be displayed here.</strong>
</div>
  </div>
</div>


<!------------------------------ ITU Lahore -->
<!-- ITU -->
<div class="university-box" onclick="event.stopPropagation();toggleForm('form5')">
  <img src="itu-logo.jpg" alt="ITU Logo">
  <div class="university-content">
    <div class="university-name">ITU Lahore</div>
    <div class="university-desc">Click here to calculate your aggregate for ITU based on your scores.</div>
  </div>
</div>

<div class="aggregate-form" id="form5" style="display: none;">
  <div class="form-flex-container">
    <form>
      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculateITUAggregate()">Calculate</button>
    </form>

    <div id="itu-result" class="aggregate-result">
      <strong>Your result will be displayed here.</strong>
    </div>
  </div>
</div>


<!---------------PU LAhOre----------->
<!-- PU Lahore -->
<div class="university-box" onclick="event.stopPropagation(); toggleForm('form6')">
  <img src="pu-logo.jpg" alt="PU Logo">
  <div class="university-content">
    <div class="university-name">PU Lahore</div>
    <div class="university-desc">Click here to calculate your aggregate for PU Lahore based on your scores.</div>
  </div>
</div>

<div class="aggregate-form" id="form6" style="display: none;">
  <div class="form-flex-container">
    <form>
      <label class="input-label">Matric Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Matric Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculatePUAggregate()">Calculate</button>
    </form>

    <!-- Result Display -->
    <div id="pu-result" class="aggregate-result">
      <strong>Your result will be displayed here.</strong>
    </div>
  </div>
</div>
<!----------------------------- COMSATS Islamabad ---------------------------->
<!----------------------------- COMSATS Islamabad ---------------------------->

<!-- COMSATS Islamabad -->
<div class="university-box" onclick="event.stopPropagation(); toggleForm('form7')">
  <img src="comsats-logo.jpg" alt="COMSATS Logo">
  <div class="university-content">
    <div class="university-name">COMSATS Islamabad</div>
    <div class="university-desc">Click here to calculate your aggregate for COMSATS based on your scores.</div>
  </div>
</div>

<div class="aggregate-form" id="form7" style="display: none;">
  <div class="form-flex-container">
    <form>
      <label class="input-label">Matric Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Matric Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Entry Test Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculateCOMSATSAggregate()">Calculate</button>
    </form>

    <div id="comsats-result" class="aggregate-result">
      <strong>Your result will be displayed here.</strong>
    </div>
  </div>
</div>


<!-------------------MDCAT 2025------------------------ -->
<div class="university-box" onclick="event.stopPropagation(); toggleForm('form8')">
  <img src="pmdc-logo.png" alt="MDCAT Logo">
  <div class="university-content">
    <div class="university-name">MDCAT</div>
    <div class="university-desc">Click here to calculate your aggregate for MDCAT-based admission.</div>
  </div>
</div>

<div class="aggregate-form" id="form8" style="display: none;">
  <div class="form-flex-container">
    <!-- Left Side: Input Fields -->
    <form>
      <label class="input-label">Matric Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Matric Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">MDCAT Marks (Out of 200):</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculateMDCATAggregate()">Calculate</button>
    </form>

    <!-- Right Side: Result Display -->
    <div id="mdcat-result" class="aggregate-result">
      <strong>Your result will be displayed here.</strong>
    </div>
  </div>
</div>
<!----------------- NUMS----------------- -->
<div class="university-box" onclick="event.stopPropagation(); toggleForm('form9')">
  <img src="nums-logo.png" alt="NUMS Logo">
  <div class="university-content">
    <div class="university-name">NUMS</div>
    <div class="university-desc">Click here to calculate your aggregate for NUMS medical admission.</div>
  </div>
</div>

<div class="aggregate-form" id="form9" style="display: none;">
  <div class="form-flex-container">
    <!-- Left Side: Input Fields -->
    <form>
      <label class="input-label">Matric Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">Matric Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Total):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">FSc Marks (Obtained):</label>
      <input type="number" class="input-field"><br>

      <label class="input-label">NUMS Entry Test Marks (Out of 150):</label>
      <input type="number" class="input-field"><br>

      <button type="button" onclick="calculateNUMSAggregate()">Calculate</button>
    </form>

    <!-- Right Side: Result Display -->
    <div id="nums-result" class="aggregate-result">
      <strong>Your result will be displayed here.</strong>
    </div>
  </div>
</div>

<!------------------------------ End of the uni versity Grid-------------- -->

<!-------------------- End of the university Grid------------------->
<!-------------------- End of the university Grid------------------->
<!-------------------- End of the university Grid------------------->
<!-------------------- End of the university Grid------------------->

        <script>
                document.addEventListener("click", function(event) {
    const formIds = ["form1", "form2", "form3", "form4", "form5","form6","form7","form8","form9"]; // Added form5

    let clickedInsideForm = false;
    for (let id of formIds) {
        const form = document.getElementById(id);
        if (form && form.contains(event.target)) {
            clickedInsideForm = true;
            break;
        }
    }

    if (!clickedInsideForm) {
        for (let id of formIds) {
            const form = document.getElementById(id);
            if (form) form.style.display = "none";
        }
    }
});

        </script>
                <!-- ----------------------------------------------.) -->
    </body>
                  <?php include("footer.php"); ?>

</html>
