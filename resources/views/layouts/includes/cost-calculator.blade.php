<div class="col mx-5 mb-4 text-center bg-white rounded mt-5 pb-1 px-3 shadow-sm mt-2 ">
        <h4 class="pt-5">Calculate the Price</h4>
        <form action="" class="form">
            <div class="form-group ">
                <label for="academic_level">Academic Level</label>
                <select name="academic_level" id="academic_level" class="form-control">
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Highschool">High School</option>
                </select>
            </div>
            <div class="form-group ">
                <label for="type_of_paper">Type Of Paper</label>
                
<select name="essayType" class="form-control" id="type_of_paper">
  <option value="admission-essay">Admission essay</option>
  <option value="analytical-essay">Analytical essay</option>
  <option value="annotated-bibliography">Annotated bibliography</option>
  <option value="argumentative-essay">Argumentative essay</option>
  <option value="article-review">Article review</option>
  <option value="assessment">Assessment</option>
  <option value="biographies">Biographies</option>
  <option value="book-review">Book review</option>
  <option value="business-plan">Business plan</option>
  <option value="capstone-project">Capstone project</option>
  <option value="case-study">Case study</option>
  <option value="cause-and-effect-essay">Cause and effect essay</option>
  <option value="compare-and-contrast-essay">Compare and contrast essay</option>
  <option value="coursework">Coursework</option>
  <option value="cover-letter">Cover letter</option>
  <option value="creative-writing">Creative writing</option>
  <option value="critical-review">Critical review</option>
  <option value="critical-thinking">Critical thinking</option>
  <option value="definition-essay">Definition essay</option>
  <option value="descriptive-essay">Descriptive essay</option>
  <option value="editing">Editing</option>
  <option value="essay-any-type">Essay (any type)</option>
  <option value="evaluation-essay">Evaluation essay</option>
  <option value="expository-essay">Expository essay</option>
  <option value="formatting">Formatting</option>
  <option value="lab-report">Lab report</option>
  <option value="literary-analysis">Literary analysis</option>
  <option value="movie-review">Movie review</option>
  <option value="multiple-choice-questions">Multiple choice questions</option>
  <option value="narrative-essay">Narrative essay</option>
  <option value="other">Other</option>
  <option value="personal-statement">Personal statement</option>
  <option value="persuasive-essay">Persuasive essay</option>
  <option value="presentation-or-speech">Presentation or speech</option>
  <option value="problem-solving">Problem solving</option>
  <option value="proofreading">Proofreading</option>
  <option value="reaction-paper">Reaction paper</option>
  <option value="reflective-essay">Reflective essay</option>
  <option value="research-paper">Research paper</option>
  <option value="research-proposal">Research proposal</option>
  <option value="rhetorical-analysis">Rhetorical analysis</option>
  <option value="term-paper">Term paper</option>
</select>

            </div>
            <div class="form-group ">
                <label for="urgency">Urgency</label>
                <select name="order_deadline" class="form-control custom-select border-default col-sm-7" id="urgency">
                <option value="3">3 Hours</option>
<option value="168">7 Days </option>
<option value="144">6 Days </option>
<option value="120">5 Days </option>
<option value="72">3 Days </option>
<option value="48">48 Hours</option>
<option value="24">24 Hours</option>
<option value="8">8 Hours</option>
<option value="3">3 Hours</option>
<option value="168">7 Days </option>
<option value="144">6 Days </option>
<option value="120">5 Days </option>
<option value="72">3 Days </option>
<option value="48">48 Hours</option>
<option value="24">24 Hours</option>
<option value="8">8 Hours</option>

          </select>
            </div>
            <div class="form-group pb-2">
                <label for="pages">Pages</label>
                <select id="pages" name="order_pages" class="form-control col-sm-7 custom-select border-default" required="">
<option value="0"> Select words/Pages </option>
<option value="1"> 1 Pages  </option>
<option value="2"> 2 Pages  </option>
<option value="3"> 3 Pages  </option>
<option value="4"> 4 Pages  </option>
<option value="5"> 5 Pages  </option>
<option value="6"> 6 Pages  </option>
<option value="7"> 7 Pages  </option>
<option value="8"> 8 Pages  </option>
<option value="9"> 9 Pages  </option>
<option value="10"> 10 Pages  </option>
<option value="11"> 11 Pages  </option>
<option value="12"> 12 Pages  </option>
<option value="13"> 13 Pages  </option>
<option value="14"> 14 Pages  </option>
<option value="15"> 15 Pages  </option>
<option value="16"> 16 Pages  </option>
<option value="17"> 17 Pages  </option>
<option value="18"> 18 Pages  </option>
<option value="19"> 19 Pages  </option>
<option value="20"> 20 Pages  </option>
<option value="21"> 21 Pages  </option>
<option value="22"> 22 Pages  </option>
<option value="23"> 23 Pages  </option>
<option value="24"> 24 Pages  </option>
<option value="25"> 25 Pages  </option>
<option value="26"> 26 Pages  </option>
<option value="27"> 27 Pages  </option>
<option value="28"> 28 Pages  </option>
<option value="29"> 29 Pages  </option>
<option value="30"> 30 Pages  </option>
</select>
            </div>
            <div class="form-group">
        <label>Total Price:</label>
        <p id="price" class="fw-bold">$0.00</p>
      </div>
        </form>
    </div>
    <script>
    // Define pricing factors (can be adjusted as needed)
    const pricingFactors = {
      undergraduate: {
        basePricePerPage: 15, // Example: $15 per page for undergraduate level
        urgencyMultipliers: {
          '3': 1.5,   // Example: 50% increase for very urgent (3 hours)
          '8': 1.3,   // Example: 30% increase for urgent (8 hours)
          '24': 1.2,  // Example: 20% increase for somewhat urgent (24 hours)
          '48': 1     // Default multiplier for other urgencies
        }
      },
      highschool: {
        basePricePerPage: 10, // Example: $10 per page for high school level
        urgencyMultipliers: {
          '3': 1.6,   // Example: 60% increase for very urgent (3 hours)
          '8': 1.4,   // Example: 40% increase for urgent (8 hours)
          '24': 1.3,  // Example: 30% increase for somewhat urgent (24 hours)
          '48': 1.1   // Example: 10% increase for other urgencies
        }
      }
    };

    document.addEventListener('DOMContentLoaded', function() {
      // Get DOM elements
      const academicLevelSelect = document.getElementById('academic_level');
      const typeOfPaperSelect = document.getElementById('type_of_paper');
      const urgencySelect = document.getElementById('urgency');
      const pagesSelect = document.getElementById('pages');
      const priceDisplay = document.getElementById('price');

      // Function to update price
      function updatePrice() {
        const academicLevel = academicLevelSelect.value.toLowerCase();
        const typeOfPaper = typeOfPaperSelect.value.toLowerCase();
        const urgencyValue = parseInt(urgencySelect.value); // Convert urgency to integer
        const pages = parseInt(pagesSelect.value);
        
        // Determine pricing factors based on academic level
        const pricingConfig = pricingFactors[academicLevel];
        const basePricePerPage = pricingConfig.basePricePerPage;
        const urgencyMultipliers = pricingConfig.urgencyMultipliers;
        console.log(pricingConfig )
        // Calculate base price
        let basePrice = pages * basePricePerPage;

        // Determine urgency multiplier based on selected urgency
        let urgencyMultiplier = urgencyMultipliers[urgencyValue.toString()] || 1; // Default to 1 if multiplier not defined

        // Adjust base price based on urgency multiplier
        basePrice *= urgencyMultiplier;
        console.log(basePrice)
        // Display the calculated price
        priceDisplay.innerText = `$${basePrice.toFixed(2)}`;
      }

      // Add event listeners to update price on change
      academicLevelSelect.addEventListener('change', updatePrice);
      typeOfPaperSelect.addEventListener('change', updatePrice);
      urgencySelect.addEventListener('change', updatePrice);
      pagesSelect.addEventListener('change', updatePrice);

      // Initial price calculation
      updatePrice();
    });
  </script>