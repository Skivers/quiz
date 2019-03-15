<?php

/**
 * @Entity
 * @Table(name="user_answers")
 */
class UserAnswers
{
	/** @var @Column (type="integer")
	 * @GeneratedValue
	 */
	private $id;
	/** @var @Column (type="integer") */
	private $questionId;
	/** @var @Column (type="text") */
	private $answer;
	/** @var @Column (type="text") */
	private $userData;
	/** @var @Column (type="datetime", name="created_at") */
	private $createdAt;
	/** @var @Column (type="datetime", name="updated_at") */
	private $updatedAt;
}