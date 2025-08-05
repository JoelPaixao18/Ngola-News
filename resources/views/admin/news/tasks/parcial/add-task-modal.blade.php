<!--! ================================================================ !-->
    <!--! [Start] Add New task Modal !-->
    <!--! ================================================================ !-->
    <div class="modal fade" id="addNewTasks" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label for="taskName" class="form-label">Name</label>
                        <input type="text" id="taskName" class="form-control" placeholder="Task Name">
                        <small class="text-muted">Tasks name for your todo</small>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Note/Description</label>
                        <div class="editor">
                            <div class="ht-150" id="notesEditorAdd"></div>
                        </div>
                        <small class="text-muted">Note/Description max 200 charectars</small>
                    </div>
                    <div id="taskDateRangeAdd" class="mb-4">
                        <label class="form-label">Date Range:</label>
                        <div class="input-group date input-daterange">
                            <input type="text" name="range-start" class="form-control" placeholder="Start date..." autocomplete="off">
                            <span class="input-group-text">to</span>
                            <input type="text" name="range-end" class="form-control" placeholder="End date..." autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label">Status:</label>
                        <select class="form-control" data-select2-selector="status">
                            <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                            <option value="secondary" data-bg="bg-secondary">Pending</option>
                            <option value="success" data-bg="bg-success">Completed</option>
                            <option value="danger" data-bg="bg-danger">Rejected</option>
                            <option value="warning" data-bg="bg-warning">Upcoming</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label">Priority:</label>
                        <select class="form-select form-control" data-select2-selector="priority">
                            <option value="primary" data-bg="bg-primary">Low</option>
                            <option value="teal" data-bg="bg-teal">Normal</option>
                            <option value="success" data-bg="bg-success">Medium</option>
                            <option value="warning" data-bg="bg-warning" selected>High</option>
                            <option value="danger" data-bg="bg-danger">Urgent</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label">Assignee:</label>
                        <select class="form-select form-control" data-select2-selector="user" multiple>
                            <option value="alex@outlook.com" data-user="1" selected>alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                            <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                        </select>
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-label">Tags:</label>
                        <select class="form-select form-control" data-select2-selector="tag" multiple>
                            <option value="primary" data-bg="bg-primary">Team</option>
                            <option value="teal" data-bg="bg-teal">Primary</option>
                            <option value="success" data-bg="bg-success">Updates</option>
                            <option value="warning" data-bg="bg-warning" selected>Personal</option>
                            <option value="danger" data-bg="bg-danger">Promotions</option>
                            <option value="indigo" data-bg="bg-indigo">Customs</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add Task</button>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Add New task Modal !-->
    <!--! ================================================================ !-->
