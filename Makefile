build:
	docker-compose build --no-rm
	docker-compose up -d

shell:
	docker-compose exec app sh