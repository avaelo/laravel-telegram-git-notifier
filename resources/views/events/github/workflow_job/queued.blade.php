<?php
/**
 * @var $payload object
 */
?>

{!! __('tg-notifier::events/github/workflow_job.queued.title', ['repo' => "<a href='{$payload->repository->html_url}'>{$payload->repository->html_url}</a>"]) !!}

{!! __('tg-notifier::events/github/workflow_job.queued.body', ['runner_name' => $payload->workflow_job->runner_name]) !!}

{!! __('tg-notifier::events/github/workflow_job.link', ['link' => "<a href='{$payload->workflow_job->html_url}'>{$payload->workflow_job->workflow_name}</a>"]) !!}
