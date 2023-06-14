@extends('layouts.app')

@section('content')

<div class="row-6 d-flex">
    <div class="form-group ">
        <label for="class">Select Class:</label>
        <select name="class" id="classSelect" class="form-select">
            <option value="">Select a class</option>
            @foreach ($classes as $class)
                <option value="{{ $class->id }}">{{ $class->NameClass }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group "> 
        <div id="studentContainer" style="display: none;">
            <label for="student">Select Student:</label>
            <select name="student" id="studentSelect" class="form-select">
                <option value="">Select a student</option>
            </select>
        </div>
    </div>
    <div class="form-group "> 
        <div id="moduleContainer" style="display: none;">
            <label for="module">Select Module:</label>
            <select name="module" id="moduleSelect" class="form-select">
                <option value="">Select a module</option>
            </select>
        </div>
    </div>
    <div id="moduleButtonsContainer" style="display: none;">
    <h4>Select Module:</h4>
    <div class="btn-group" role="group" aria-label="Module Buttons">
        <!-- Generate buttons for each module -->
        @foreach ($modules as $module)
            <button type="button" class="btn btn-primary module-button" data-module-id="{{ $module->id }}">{{ $module->name }}</button>
        @endforeach
    </div>
</div>

    <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="noteModalLabel">Add Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exam1" class="form-label">Exam 1:</label>
                            <input type="text" class="form-control" id="exam1" name="exam1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exam2" class="form-label">Exam 2:</label>
                            <input type="text" class="form-control" id="exam2" name="exam2" required>
                        </div>
                        <div class="mb-3">
                            <label for="exam3" class="form-label">Exam 3:</label>
                            <input type="text" class="form-control" id="exam3" name="exam3" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id='close-modal' data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveNoteButton">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>

<script>
    const classes = @json($classes);
    const modules = @json($modules);

    document.getElementById('classSelect').addEventListener('change', function() {
        const classId = this.value;
        const studentContainer = document.getElementById('studentContainer');
        const studentSelect = document.getElementById('studentSelect');
        
        studentSelect.innerHTML = '<option  value="">Select a student</option>';

        if (classId !== '') {
            const selectedClass = classes.find(cls => cls.id == classId);
            selectedClass.students.forEach(student => {
                const option = document.createElement('option');
                option.value = student.id;
                option.textContent = student.name;
                studentSelect.appendChild(option);
            });
            studentContainer.style.display = 'block';
        } else {
            studentContainer.style.display = 'none';
        }
    });

 document.getElementById('studentSelect').addEventListener('change', function() {
        const studentId = this.value;
        const moduleButtonsContainer = document.getElementById('moduleButtonsContainer');

        if (studentId !== '') {
            moduleButtonsContainer.style.display = 'block';
        } else {
            moduleButtonsContainer.style.display = 'none';
        }
    });

    // Handle module button click
    const moduleButtons = document.querySelectorAll('.module-button');
    const noteModal = new bootstrap.Modal(document.getElementById('noteModal'));
    const saveNoteButton = document.getElementById('saveNoteButton');
    const closeModal= document.getElementById('close-modal')

    moduleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const moduleId = button.getAttribute('data-module-id');

            // Open the note modal for the selected module
            noteModal.show();
            // Handle save button click
            saveNoteButton.addEventListener('click', function() {
                const exam1 = document.getElementById('exam1').value;
                const exam2 = document.getElementById('exam2').value;
                const exam3 = document.getElementById('exam3').value;
                noteModal.hide();

            });
            
        });
    });

closeModal.addEventListener('click',function(){
          noteModal.hide(); 
})








    // document.getElementById('studentSelect').addEventListener('change', function() {
    //     const studentId = this.value;
    //     const moduleContainer = document.getElementById('moduleContainer');
    //     const moduleSelect = document.getElementById('moduleSelect');

    //     moduleSelect.innerHTML = '<option value="">Select a module</option>';

    //     if (studentId !== '') {
    //         var selectedClassId = document.getElementById('classSelect').value;
    //         var selectedClass = classes.find(cls => cls.id == selectedClassId);
    //         var selectedStudent = selectedClass.students.find(student => student.id == studentId);
    //         console.log(modules)
    //         modules.map(elem => {
    //             var module = modules.find(module => module.id == elem.id);
    //             var option = document.createElement('option');
    //             option.value = module.id;
    //             option.textContent = module.name;
    //             moduleSelect.appendChild(option);
    //         });
    //         moduleContainer.style.display = 'inline';

    //     } else {
    //         moduleContainer.style.display = 'none';
    //     }
    // });



</script>
@endsection
