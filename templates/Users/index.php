<div class="flex-grid">
    <div class="container-fluid">
        <h2>List Users</h2>
        <a href="/users/add"><i class="glyphicon glyphicon-plus"></i><button type="button" class="btn btn-primary">Add</button></a>
        <table class="table table-bordered" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('age') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->fullname ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->age ?></td>
                    <td>
                        <button type="button" class="btn btn-success">
                            <?= 

                                $user->role == 1? "Admin" : "User"
                            ?>
                        </button>    
                    </td>
                    <td><?= $user->created_at ?></td>
                    <td><?= $user->updated_at ?></td>
                    <td class="actions">
                        <button type="button" class="btn btn-success"><?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?></button>
                        <button type="button" class="btn btn-primary"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?></button>
                        <button type="button" class="btn btn-danger btn-delete-selected">
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
    
</div>