<?php

/**
 * @Entity @Table(name="quiz_questions")
 */
class Questions
{
	/** @id @Column(type="integer") @GeneratedValue **/
	protected $id;
	/** @question_id @Column (type="integer") */
	protected $question_id;
	/** @lock_status @Column (type="integer") */
	protected $lockStatus;
	/** @created_at @Column (type="datetime", name="created_at") */
	protected $createdAt;
	/** @updated_at @Column (type="datetime", name="updated_at") */
	protected $updatedAt;
}