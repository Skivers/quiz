<?php

/**
 * @Entity
 * @Table(name="user_answers")
 */
class UserAnswers
{
	/** @id @Column (type="integer")
	 * @GeneratedValue (strategy="AUTO")
	 */
	protected $id;
	/** @question_id @Column (type="integer") */
	protected $questionId;
	/** @answer @Column (type="text") */
	protected $answer;
	/** @user_data @Column (type="text") */
	protected $userData;
	/** @created_at @Column (type="datetime", name="created_at") */
	protected $createdAt;
	/** @updated_at @Column (type="datetime", name="updated_at") */
	protected $updatedAt;
}