
const work = document.querySelector(".work")
const works_section = document.querySelector(".works")
var work_c = 1;
work.onclick = ()=>{
    const div = document.createElement("div")
    div.classList.add("addon-skill"+work_c)
    div.innerHTML = `

    <div class="inputs">

        <h4 class="label">Designation : </h4>
        <input required type="text" name="desig${work_c}" placeholder="Senior developer">

        <h4 class="label">Organization : </h4>
        <input required type="text" name="org${work_c}"  placeholder="Microsoft">
        
        <h4 class="label">started on  : </h4>
        <input required type="date" name="workstart${work_c}" placeholder="">
        
        <h4 class="label">Ended on : </h4>
        <input required type="date" name="workend${work_c}"  placeholder="">
        <span class='check-box'>

            <input type="checkbox" name="working${work_c}" id='labelcw'>
            <label for="labelcw">Currently working</label>
</span>
    </div>
    <input type="hidden" value="${work_c}" name="work_count" class='tracker'>

    
            `;
    works_section.appendChild(div);
    work_c++;
}