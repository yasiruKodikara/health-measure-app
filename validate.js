const form = document.querySelector('form');

        form.addEventListener('submit', (e)=>{
            e.preventDefault();

            const name = document.getElementById('name');
            const weight = document.getElementById('weight');
            const height = document.getElementById('height');
            const bmi_output = document.getElementById('bmi');
            const status = document.getElementById('status');
            

            let hasError = false;

            console.log('Weight:', weight.value);
            console.log('Height:', height.value);

            name.classList.remove('error-input');
            weight.classList.remove('error-input');
            height.classList.remove('error-input');
            status.classList.remove(
                "underweight",
                "normal-weight",
                "overweight",
                "obesity"
            );

            name.nextElementSibling.innerText = '';
            weight.nextElementSibling.innerText = '';
            height.nextElementSibling.innerText = '';

            //validations

            if(name.value===""){

                name.nextElementSibling.innerText = 'Please enter name';
                name.classList.add('error-input');
                hasError = true;

            }

            if (weight.value==="" || weight.value <= 0) {
                
                weight.nextElementSibling.innerText = 'Please enter weight';
                weight.classList.add('error-input');
                
                hasError = true;
                
                
            }

            if (height.value==="" || height.value <= 0) {
                height.nextElementSibling.innerText = 'Please enter height';
                height.classList.add('error-input');

                hasError = true;
                
                
            }

            if(hasError){
                return;
            }
            

            let bmi = parseFloat((weight.value / ((height.value/100) ** 2)).toFixed(2));
            console.log('BMI:', bmi);

            bmi_output.value = bmi;

            if (bmi < 18.5) {
                status.value = 'Underweight';
                status.classList.add('underweight');
            } else if (bmi >= 18.5 && bmi < 25) {
                status.value = 'Normal weight';
                status.classList.add('normal-weight');
            } else if (bmi >= 25 && bmi < 30) {
                status.value = 'Overweight';
                status.classList.add('overweight');
            } else if (bmi >= 30) {
                status.value = 'Obesity';
                status.classList.add('obesity');
            } else {
                status.value = 'Invalid BMI';
            }


            setTimeout(()=>{
                form.submit();
            },3000);
            


            
        })