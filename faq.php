<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FAQ Page</title>
  <link rel="stylesheet" href="mystyles.css"> <!-- Your custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    .faq-container {
      max-width: 800px;
      margin: auto;
    }

    .faq-button {
      background-color: #1c7674f3;
      color: white;
      border: none;
      padding: 15px 20px;
      margin: 10px 0;
      width: 100%;
      text-align: left;
      cursor: pointer;
      border-radius: 12px;
      font-size: 18px;
      transition: background-color 0.3s, box-shadow 0.3s;
    }

    .faq-button:hover {
      background-color: #030d56ff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .faq-answer {
      display: none;
      background-color: #4ef2a6ff;
      color: black;
      padding: 20px;
      margin-top: 5px;
      border-radius: 8px;
    }

    .faq-item {
      position: relative;
    }
  </style>
</head>
<body>

<div class="faq-container">
  <div class="faq-item">
    <button class="faq-button">Q-1 : Is NUST better than FAST for CS ??</button>
    <div class="faq-answer">If your goal is to become a top software engineer, FAST is often slightly better due to its laser-focus on CS and industry connections.

If your goal is a balanced university experience, with research opportunities, better campus, and possibly international academia, NUST is a better choice.</div>
  </div>

  <div class="faq-item">
    <button class="faq-button">Q-2 : Is PIEAS Good for CS ? </button>
    <div class="faq-answer">PIEAS is excellent for CS if you're academically driven, interested in scientific computing, AI, or higher studies.
If your goal is to become a full-stack developer or enter the software industry fast, then FAST or NUST may offer a more industry-ready environment</div>
  </div>

  <div class="faq-item">
    <button class="faq-button">Q-3 : Which is Good for Mechanical Engineering ? NUST or PIEAS ?</button>
    <div class="faq-answer">For Mechanical Engineering, both NUST and PIEAS are excellent, but they serve different goals.PIEAS is ideal for students interested in thermal systems, 
         fluid mechanics, nuclear engineering, or government R&D roles, with a strong academic and research focus, especially in strategic organizations like PAEC or NESCOM. 
        On the other hand, NUST is better 
        if you're aiming for careers in robotics, design, automotive, or private-sector industries, especially through its SMME or EME campuses,
         offering modern labs, industry exposure, and a vibrant student life.  In short, choose NUST for industry and innovation, and PIEAS for research and strategic engineering roles.</div>
  </div>
 
  <div class="faq-item">
    <button class="faq-button">Q-4 : Which University is good for Literature Studies ? </button>
    <div class="faq-answer">If you want a highly respected, literature-rich environment, GCU Lahore is often considered the best.
If you're looking for a language-oriented or international approach, NUML is a strong choice.
For female students, Kinnaird College is top-tier.
And for affordable quality, Punjab University is reliable.</div>
  </div>
 <div class="faq-item">
    <button class="faq-button">Q-5 : Will AI take the Jobs of the CS students ? </button>
    <div class="faq-answer">No, AI won’t take the jobs of CS students—but it will change them. CS students who learn how to build, use, and work with AI will be in even higher demand. Routine coding tasks may be automated, but roles in AI development, data science, cybersecurity, software architecture, and systems design will grow. Those who adapt will thrive.</div>
  </div>
  <div class="faq-item">
    <button class="faq-button">Q-6 : What is the difference between the degree of the Computer Science and Software Engineering ?</button>
    <div class="faq-answer">Computer Science (CS) is more theoretical and broad, covering algorithms, AI, data structures, and system design.
Software Engineering (SE) is more practical, focusing on building, testing, and managing large software systems using engineering principles.

Both lead to software careers, but CS leans toward theory and innovation, while SE emphasizes teamwork and real-world application</div>
  </div>
   <div class="faq-item">
    <button class="faq-button">Q-7 : Does PIEAS offer scholarships on the base of grades in intermediate level ?</button>
    <div class="faq-answer">PIEAS does not offer merit-only scholarships based solely on intermediate marks. Most support is need-based or tied to internal merit after admission. If you're financially constrained, it's still worth applying — there are several aid programs, but your intermediate grades alone won’t guarantee a scholarship.</div>
  </div>

  <div class="faq-item">
    <button class="faq-button">Q-8 : Is studying in AIR or BEHRIA universities  worth it ?</button>
    <div class="faq-answer">Yes, it can be worth it if you study seriously, choose a strong department (like CS/IT in Islamabad), and actively build skills (e.g., coding, internships, certifications).
But if you have the option of top-tier universities like NUST, FAST, PIEAS, GIKI, prefer those for better academic and career growth.</div>
  </div>
  <!-- Add more FAQ items similarly -->
</div>

<script>
  const buttons = document.querySelectorAll('.faq-button');
  const answers = document.querySelectorAll('.faq-answer');

  // Function to hide all answers
  function hideAllAnswers() {
    answers.forEach(answer => answer.style.display = 'none');
  }

  // Toggle answer when a button is clicked
  buttons.forEach((button, index) => {
    button.addEventListener('click', function (e) {
      e.stopPropagation(); // Prevent global click handler
      const answer = answers[index];
      const isOpen = answer.style.display === 'block';
      hideAllAnswers();
      if (!isOpen) {
        answer.style.display = 'block';
      }
    });
  });

  // Hide form if clicking outside
  document.addEventListener('click', function () {
    hideAllAnswers();
  });

  // Prevent closing form when clicking inside it
  answers.forEach(answer => {
    answer.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  });
</script>

<?php include 'footer.php'; ?>
</body>
</html>
