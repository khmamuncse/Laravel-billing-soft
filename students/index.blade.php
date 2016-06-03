<?php
/**
 * Created by PhpStorm.
 * User: tanginama
 * Date: 22-Mar-16
 * Time: 12:29 AM
 */

        echo "hello from student";
?>

<table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
@foreach ($students as $students)
    <tr>
        <!-- Task Name -->
        <td class="table-text">
            <div>{{ $students->name }}</div>
            <div>{{ $students->roll }}</div>
        </td>

        <td>
            <!-- TODO: Delete Button -->
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>