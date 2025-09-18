import React, { useState, useEffect } from "react";
import {
	Row,
	Col,
	Button,
	Space,
	Typography,
	Divider,
} from "antd";
import { IconChevronLeft } from "@tabler/icons-react";
import { Link, router } from "@inertiajs/react";
const { Text, Title } = Typography;

const PageActions = (props) => {


	return (
		<div className={`page-heading mb-1`}>
		<Row
			align="middle"
			justify="space-between"
			key={`row-` + 0}
		>
			<Col key={`col-` + 0}>
				<Space align="start">
					{props.backUrl && (
						<Link href={props.backUrl}>
							<Button icon={<IconChevronLeft className="anticon" />} />
						</Link>
					)}
					<div>
						<Space align="baseline">
							{props.favorite && (
								<Button
									type={is_favorited ? "primary" : "default"}
									onClick={toggleCategoryPopup}
									icon={<IconStar />}
									shape="square"
								/>
							)}
								<Title
									level={3}
									style={{ marginBottom: 0 }}
								>
									{props.title}
								</Title>
							</Space>
							{props.subTitle && (
								<div>
									<Text type="secondary">{props.subTitle}</Text>
								</div>
							)}
						</div>
					</Space>
				</Col>
				<Col
					flex="auto"
					style={{ textAlign: "right" }}
					key={`col-` + 1}
				>
					<Space>{props.extra}</Space>
				</Col>
			</Row>
			{props.children && (
				<Row
					className="mt-1"
					key={`row-` + 1}
				>
					{React.Children.map(props.children, (child, index) => (
						<span
							key={index}
							className="page-actions_meta"
						>
							{child}
						</span>
					))}
				</Row>
			)}
			<Divider />
		</div>
	);
};

export default PageActions;
