// Get the country and state select elements
const countrySelect = document.getElementById('country');
const stateSelect = document.getElementById('state');

// Add event listener to country select element
countrySelect.addEventListener('change', function () {
  const selectedCountry = this.value;

  // Fetch states based on the selected country
  fetchStates(selectedCountry);
});

function fetchStates(selectedCountry) {
  // Clear existing options in the states select element
  stateSelect.innerHTML = '<option value="">Loading...</option>';

  // Fetch states based on the selected country
  fetch('getstates.php?country=' + selectedCountry)
    .then(response => response.json())
    .then(data => {
      // Clear existing options
      stateSelect.innerHTML = '<option hidden>Select State</option>';

      // Populate the state select element with fetched states
      data.forEach(state => {
        const option = document.createElement('option');
        option.value = state.idstate;
        option.textContent = state.state_name;
        stateSelect.appendChild(option);
      });
    })
    .catch(error => {
      console.error('Error fetching states:', error);
      stateSelect.innerHTML = '<option value="">Error fetching states</option>';
    });
}
